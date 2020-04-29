<?php

use ColdTrick\FontAwesome\Bootstrap;

return [
	'bootstrap' => Bootstrap::class,
	'actions' => [
	],
	'hooks' => [
		'head' => [
			'page' => [
				'\ColdTrick\FontAwesome\Page::addFontAwesome' => [],
			],
		],
	],
	'view_extensions' => [
		'elements/components/menus.css' => [
			'css/fontawesome_pro.css' => [],
		],
	],
];
	