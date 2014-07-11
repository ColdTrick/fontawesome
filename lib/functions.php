<?php
/**
 * All helper functions are bundled here
 */

function fontawesome_translate_icon($icon_name) {
	static $translated_icons = array(
		"arrows-h" => "arrow-two-head",
		"exclamation-triangle" => "attention",
		"mobile" => "cell-phone",
		"check" => "checkmark",
		"paperclip" => "clip",
		"arrows" => "cursor-drag-arrow",
		"times-circle" => "delete-alt",
		"times" => "delete",
		"facebook-square" => "facebook",
		"th" => "grid",
		"toggle-down" => "hover-menu",
		"info-circle" => "info",
		"lock" => "lock-closed",
		"unlock" => "lock-open",
		"envelope-o" => "mail",
		"envelope" => "mail-alt",
		"print" => "print-alt",
	);
	
	$search = array_search($icon_name, $translated_icons);
	if ($search !== false) {
		$icon_name = $search;
	}
	
	return $icon_name;
}