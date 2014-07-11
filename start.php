<?php
/**
 * Main file for the Font Awesome plugin
 */

require_once(dirname(__FILE__) . "/lib/functions.php");

// register default Elgg events
elgg_register_event_handler("init", "system", "fontawesome_init");

/**
 * Gets called when the Elgg system initializes
 *
 * @return void
 */
function fontawesome_init() {
	
	// add CSS / JS
	elgg_extend_view("css/elgg", "css/fontawesome/colors", 400);
	
	// register css
	elgg_register_css("fontawesone", "mod/fontawesome/vendors/font-awesome-4.1.0/css/font-awesome.min.css");
	elgg_load_css("fontawesone");
}