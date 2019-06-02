=== Travelers' Map ===
Contributors: socrapop
Donate link: https://www.paypal.me/CamilleVerrier
Tags: travel, openstreetmap, leaftlet, map, pin, travelers, markers, traveler
Requires at least: 4.4.0
Tested up to: 5.2
Requires PHP: 5.2.4
Stable tag: trunk
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Version 0.8.0

Geolocate your posts and display them on an interactive OpenStreetMap map using a simple shortcode. Customize your markers and map. 


== Description ==
Travelers' Map allows you to display your blog posts on a dynamic map using the Leaflet module and OpenStreetMap open data. This plugin is entirely free.

See this plugin in action on my [hiking blog](https://camilles-travels.com/la-carte/).
How to use: [Get started with Travelers' Map](https://camilles-travels.com/get-started-with-travelers-map-wordpress-plugin/)

= Features of Travelers' Map =

* **Geolocate your posts** on a map and choose the marker image. A **search module** is available to quickly locate the desired location.
* Add your own images to **customize your markers**.
* **Insert a dynamic map** that displays your articles using a **simple shortcode**. Choose the dimensions of your map.
* **Filter the posts** you want to display on the map by their categories and tags.
* **Markers clustering** is automatic when marker density is too high, to prevent them from overlapping.
* **Customize** the appearance of your maps with OpenStreetMap tile providers. By default, the plugin uses CARTO's free and open "Voyager" map tiles.
* Travelers' Map is **compatible with the new Gutenberg editor** and the classic editor.
* This plugin **does not add any tables into your database**.

The geolocation data of your posts are saved as meta-data and **are not deleted if Travelers' Map is disabled or deleted**. However, if you want to uninstall Travelers' Map permanently, an option is available to **clean your database of any data added by the plugin**.

== Installation ==

1. Go to the Plugins -> 'Add New' page in your WP admin area
2. Search for 'Travelers Map'
3. Click the ‘Install Now’ button
4. Activate the plugin through the ‘Plugins’ menu

= Get started =

Detailed guide is available here: [Get started with Travelers' Map](https://camilles-travels.com/get-started-with-travelers-map-wordpress-plugin/)

== Bug reports and Contribution ==

Bug reports for Travelers' map are welcomed on my [GitHub Repository](https://github.com/Socrapop/travelers-map). Also, feel free to use Github to contribute to the plugin!




== Screenshots == 
1. Display an interactive map showing your posts using a shortcode.
2. Geolocate each of your post directly in your editor and assign your custom markers to them. A search module is integrated into the map. 
3. Add custom markers easily.
4. Customize your map in the settings page. Everything is explained clearly.
5. Shortcode Helper page. Change the default size of your map, filter the posts you want to show by categories and tags.

== Changelog ==

= 0.8.0 = 
* First version released publicly on wordpress.org

== Frequently Asked Questions ==

= Is this open source and free of charge? =
Yes, it is. This plugin uses [Leaflet](https://leafletjs.com/) to display the interactive maps. [OpenStreetMap](https://www.openstreetmap.org/) open data is used. By default, this plugin uses [CARTO’s Voyager](https://carto.com/attribution/) tiles, which require attribution but are free. 

However, you may have to pay if you were to choose a premium Tile Provider.

= How can I find free tile providers to customize my map? =
You should visit the awesome [Leaflet-providers demo](https://leaflet-extras.github.io/leaflet-providers/preview/) to find a tile provider. Some of them require to register and request an API key.

= Can I use Google Maps = 
No, I decided to create Travelers' Map after Google Maps' pricing plans were updated. Furthermore, loading tiles from Google Maps by simply specifying the URL of Leaflet is against the Google Maps terms of service.
If you really want to use Google Maps (but really, why?), you can use the plugin Novo-Map that I used to use on my personal blog.

= I only have one marker image, why? =

For now, this plugin comes with only one default marker. More will be added in future updates. 
However, you can add your own custom markers in "Travelers' Map" > "Customize markers" in your Wordpress admin area.

= Is this plugin only available in English? =
At this time, yes. Translations will be added in future updates.
The user guide is also [available in French](https://camilles-travels.com/demarrez-avec-travelers-map-extension-wordpress) 

= Can I add two maps on the same page? =
I am afraid not. You can only display one map per page. 

= Can I change the marker popup style? =
Not yet, right now the popup shows the post thumbnail and title in a beautiful way. Excrept is not yet available in popup.
