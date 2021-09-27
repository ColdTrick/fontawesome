<?php

use ColdTrick\FontAwesome\Bootstrap;

return [
	'plugin' => [
		'version' => '3.0',
	],
	'bootstrap' => Bootstrap::class,
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
];
	