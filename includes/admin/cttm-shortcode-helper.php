<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add the shortcode Helper page
 */

//Add the page
add_action('admin_menu', 'cttm_add_shortcodehelper');
function cttm_add_shortcodehelper()
{
    add_submenu_page("cttm_travelersmap", __('Travelers\' Map - Shortcode Helper', 'travelers-map'), __('Shortcode Helper', 'travelers-map'), "manage_options", "cttm_travelersmap_shortcode", 'cttm_shortcodehelper_page');
}


//Draw the options page
function cttm_shortcodehelper_page()
{
?>
    <div class="wrap wrap-shortcode-helper">
        <h1>Travelers' Map <small>| <?php _e('Shortcode Helper', 'travelers-map'); ?> </small></h1>
        <p><small><?php _e('Do you want to make Travelers\' Map better? All the updates are based on community feedbacks!', 'travelers-map'); ?>
                <br>
                <?php printf(__('Do not hesitate to <a href="%1$s" target="_blank">rate this plugin and give me some feedbacks</a>.', 'travelers-map'), 'https://wordpress.org/plugins/travelers-map/#reviews'); ?>
            </small></p>
        <hr>
        <div class="row">
            <div class="col-lg helper-bloc">
                <h2><?php _e('Your shortcode', 'travelers-map'); ?></h2>
                <p class="description"><?php _e('Copy and paste this shortcode into the content of a Post or a Page to add a dynamic map:', 'travelers-map'); ?></p>
                <div id="cttm-shortcode-helper">[travelers-map]</div>
            </div>
        </div>
        <hr>

        <h2><?php _e('Shortcode settings', 'travelers-map'); ?></h2>
        <p><?php _e('The above shortcode is automatically updated when you modify the settings below :', 'travelers-map'); ?></p>

        <div class="row">
            <div class="col-lg helper-bloc">
                <h3><?php _e('Map dimensions', 'travelers-map'); ?></h3>

                <div style="line-height: 2.2;">
                    <label for="width"><strong><?php _e('Width:', 'travelers-map'); ?> </strong></label><input id="width" type="text" placeholder="Default: 100%">
                    <br>
                    <span class="description"><?php printf(__(' Any <a href="%1$s" target="_blank">valid CSS unit</a> is accepted. Exemple: <code>780px</code> or <code>50%%</code> ', 'travelers-map'), 'https://www.w3schools.com/cssref/css_units.asp'); ?>
                    </span>
                </div>
                <br><br>
                <div style="line-height: 2.2;">
                    <label for="height"><strong><?php _e('Height:', 'travelers-map'); ?> </strong></label><input id="height" type="text" placeholder="Default: 600px">
                    <br>
                    <span class="description"><?php printf(__(' Any <a href="%1$s" target="_blank">valid CSS unit</a> is accepted, although <code>px</code> and <code>vh</code> are recommended. Exemple: <code>500px</code> or <code>25vh</code>', 'travelers-map'), 'https://www.w3schools.com/cssref/css_units.asp'); ?></span>
                </div>
                <br><br>
                <div style="line-height: 2.2;">
                    <label for="maxwidth"><strong><?php _e('Max width:', 'travelers-map'); ?> </strong></label><input id="maxwidth" type="text" placeholder="Default: none">
                    <br>
                    <span class="description">
                        <?php _e('Exemple:', 'travelers-map'); ?> <code>1200px</code>.</span>
                </div>
                <br><br>
                <div style="line-height: 2.2;">
                    <label for="maxheight"><strong><?php _e('Max height:', 'travelers-map'); ?> </strong></label><input id="maxheight" type="text" placeholder="Default: none">
                    <br>
                    <span class="description"><?php _e('Exemple:', 'travelers-map'); ?> <code>800px</code>.</span>
                </div>
            </div>

            <div class="col-lg helper-bloc">
                <h3><?php _e('Zoom settings', 'travelers-map'); ?></h3>
                <div>
                    <label><input type="checkbox" id="centered_on_this" style="margin-right: 10px;" name="centered_on_this" value="true"><strong><?php _e('Initially zoom on current post\'s marker', 'travelers-map'); ?></strong></label><br>
                    <p class="description"><?php _e('Check this box to show a map zoomed on the current post\'s marker, moreover other posts are also displayed on the map.', 'travelers-map'); ?></p>
                    <label></label>

                </div>
                <br>
                <div style="line-height: 2.2;">
                    <label for="minzoom"><strong><?php _e('Min zoom:', 'travelers-map'); ?> </strong></label><input id="minzoom" type="number" step="1" min="0" max="18" placeholder="Default: 0">
                    <br>
                    <span class="description"><?php _e('The minimum zoom level of the map. Default: <code>0</code>', 'travelers-map'); ?></span>
                </div>
                <br>
                <div style="line-height: 2.2;">
                    <label for="maxzoom"><strong><?php _e('Max zoom:', 'travelers-map'); ?> </strong></label><input id="maxzoom" type="number" step="1" min="0" max="18" placeholder="Default: 18">
                    <br>
                    <span class="description"><?php _e('The maximum zoom level of the map. Default: <code>18</code>', 'travelers-map'); ?></span>
                </div>
                <br>

                <div style="line-height: 2.2;">
                    <label for="init-maxzoom"><strong><?php _e('Initialization max zoom:', 'travelers-map'); ?> </strong></label><input id="init-maxzoom" type="number" step="1" min="0" max="18" placeholder="Default: 16">
                    <br>
                    <span class="description"><?php _e('On initialization, the map is zoomed to fit all the markers inside it. <br>This setting is useful to unzoom when only one marker is displayed. <code>18</code> is zoomed at the maximum, <code>1</code> is a world view.', 'travelers-map'); ?></span>
                </div>

                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg helper-bloc">

                <h3><?php _e('Filter markers', 'travelers-map'); ?></h3>
                <div class="row">
                    <div class="col-lg">


                        <div>
                            <label><input type="checkbox" id="thispostsmarker" style="margin-right: 10px;" name="thispost" value="true"><strong><?php _e('Show current post\'s marker only', 'travelers-map'); ?></strong></label><br>
                            <p class="description"><?php _e('Check this box to show a map with the current post\'s marker only.', 'travelers-map'); ?></p>
                            <label></label>

                        </div>

                        <br>

                        <div style="line-height: 2.2;">
                            <label for="post_id"><strong><?php _e('Show only this post (ID):', 'travelers-map'); ?> </strong></label><input id="post_id" type="number" step="1" min="1" placeholder="">
                            <br>
                            <span class="description"><?php _e('Show a map with this ID\'s marker only. This can be combined with "Initially zoom on current post\'s marker" setting to zoom on this ID\'s marker but keep the others showing.', 'travelers-map'); ?></span>
                        </div>
                        <br>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl helper-bloc-inner categories">
                        <strong><?php _e('Categories:', 'travelers-map'); ?></strong><br>
                        <p class="description"> <?php _e('Select the categories you want to show on the map. Default: All categories.', 'travelers-map'); ?></p>

                        <div class="checkbox-container">
                            <?php
                            $cttm_allcategories = get_categories(array(
                                'orderby' => 'name',
                                'hide_empty' => false
                            ));

                            foreach ($cttm_allcategories as $cttm_cat) {

                                echo '<label><input type="checkbox" class="cttm-cat-checkbox" name="' . $cttm_cat->name . '" value="' . $cttm_cat->slug . '">' . $cttm_cat->name . '</label>';
                            }
                            ?>
                        </div>

                    </div>

                    <div class="col-xl helper-bloc-inner tags">
                        <strong><?php _e('Tags:', 'travelers-map'); ?></strong><br>
                        <p class="description"><?php _e('Select the tags you want to show on the map. Default: All tags.', 'travelers-map'); ?></p>
                        <div class="checkbox-container">

                            <?php
                            $cttm_alltags = get_tags(array(
                                'orderby' => 'name',
                                'hide_empty' => false
                            ));

                            foreach ($cttm_alltags as $cttm_tag) {

                                echo '<label><input type="checkbox" class="cttm-tag-checkbox" name="' . $cttm_tag->name . '" value="' . $cttm_tag->slug . '">' . $cttm_tag->name . '</label>';
                            }
                            ?>

                        </div>

                    </div>

                    <div class="col-xl helper-bloc-inner posttypes">
                        <strong><?php _e('Post types:', 'travelers-map'); ?></strong><br>
                        <p class="description"> <?php _e('Select the post types you want to show on the map. Default: All post types selected in the plugin option page.', 'travelers-map'); ?></p>

                        <div class="checkbox-container">
                            <?php
                            //get all public registered post types
                            $registered_posttypes = get_post_types(['public' => true], 'objects');


                            //Add a checkbox for each registered post type, and check it if already checked in options.
                            foreach ($registered_posttypes as $registered_posttype) {
                                if ($registered_posttype->name != 'attachment') {

                                    echo '<label><input type="checkbox" class="cttm-posttype-checkbox" name="' . $registered_posttype->name . '" value="' . $registered_posttype->name . '">' . $registered_posttype->labels->singular_name . '</label>';
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
