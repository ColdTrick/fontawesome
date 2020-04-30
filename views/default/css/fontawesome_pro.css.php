<?php

$href = elgg_get_plugin_setting('href', 'fontawesome');
$integrity = elgg_get_plugin_setting('integrity', 'fontawesome');
$zip = elgg_get_plugin_setting('zip', 'fontawesome');

if (empty($href) && empty($integrity) && empty($zip)) {
	return;
}

?>
.elgg-menu:not(.elgg-menu-hz) .elgg-menu-item-has-toggle,
.elgg-menu.elgg-menu-hz .elgg-menu-item-has-dropdown,
.elgg-menu.elgg-menu-filter .elgg-menu-item-has-dropdown {
	.elgg-menu-closed:after,
	.elgg-menu-opened:after {
		font-family: 'Font Awesome\ 5 Pro' !important;
	}
}
