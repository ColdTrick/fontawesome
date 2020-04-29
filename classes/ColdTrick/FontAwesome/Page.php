<?php

namespace ColdTrick\FontAwesome;

class Page {
	
	/**
	 * Register FontAwesome icons
	 *
	 * @param \Elgg\Hook $hook 'head', 'page'
	 *
	 * @return []
	 */
	public static function addFontAwesome(\Elgg\Hook $hook) {
		
		$href = elgg_get_plugin_setting('href', 'fontawesome');
		$integrity = elgg_get_plugin_setting('integrity', 'fontawesome');
		
		if (empty($href) || empty($integrity)) {
			return;
		}
		
		elgg_unregister_external_file('css', 'font-awesome');
		
		$return = $hook->getValue();
		
		$return['links']['font-awesome'] = [
			'rel' => 'stylesheet',
			'href' => $href,
			'integrity' => $integrity,
			'crossorigin' => 'anonymous',
		];
		
		return $return;
	}
}
