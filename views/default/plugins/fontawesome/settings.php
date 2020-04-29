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