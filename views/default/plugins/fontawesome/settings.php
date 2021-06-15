<?php

/* @var $entity ElggPlugin */
$plugin = elgg_extract('entity', $vars);

echo elgg_view_field([
	'#type' => 'url',
	'#label' => elgg_echo('fontawesome:settings:href'),
	'name' => 'params[href]',
	'value' => $plugin->href,
]);

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('fontawesome:settings:integrity'),
	'name' => 'params[integrity]',
	'value' => $plugin->integrity,
]);

echo elgg_view_field([
	'#type' => 'file',
	'#label' => elgg_echo('fontawesome:settings:zip'),
	'#help' => elgg_echo('fontawesome:settings:zip:help'),
	'name' => 'zip',
	'value' => $plugin->zip,
	'accept' => '.zip',
]);

if ($plugin->zip) {
	echo elgg_view_field([
		'#type' => 'checkbox',
		'#label' => elgg_echo('fontawesome:settings:remove_zip'),
		'name' => 'remove_zip',
		'value' => 1,
		'switch' => true,
	]);
}

echo elgg_view_field([
	'#type' => 'hidden',
	'name' => 'flush_cache',
	'value' => 1,
]);
