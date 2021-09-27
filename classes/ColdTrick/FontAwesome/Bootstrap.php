<?php

namespace ColdTrick\FontAwesome;

use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap {
	
	/**
	 * {@inheritDoc}
	 */
	public function load() {
		// since we use a lib function we can't register this in elgg-plugin.php
		$views_spec = [
			'default' => [
				'fontawesome/webfont/' => elgg_get_data_path() . 'fontawesome/webfont/',
			],
		];
		
		_elgg_services()->views->mergeViewsSpec($views_spec);
	}
}
