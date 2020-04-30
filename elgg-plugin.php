<?php

use ColdTrick\FontAwesome\Bootstrap;

return [
	'bootstrap' => Bootstrap::class,
	'actions' => [
	],
	'hooks' => [
		'head' => [
			'page' => [
				'\ColdTrick\FontAwesome\Page::addFontAwesomeFromCDN' => [],
				'\ColdTrick\FontAwesome\Page::addFontAwesomeFromUpload' => [],
			],
		],
		'response' => [
			'action:plugins/settings/save' => [
				'\ColdTrick\FontAwesome\Settings::checkZipUpload' => [],
			],
		],
	],
	'view_extensions' => [
		'elements/components/menus.css' => [
			'css/fontawesome_pro.css' => [],
		],
	],
	'views' => [
		'default' => [
			'fontawesome/webfont/' => elgg_get_data_path() . 'fontawesome/webfont/',
		],
	],
];
	