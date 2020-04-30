<?php

namespace ColdTrick\FontAwesome;

class Page {
	
	/**
	 * Register FontAwesome icons from a CDN url
	 *
	 * @param \Elgg\Hook $hook 'head', 'page'
	 *
	 * @return []
	 */
	public static function addFontAwesomeFromCDN(\Elgg\Hook $hook) {
		
		$href = elgg_get_plugin_setting('href', 'fontawesome');
		$integrity = elgg_get_plugin_setting('integrity', 'fontawesome');
		$zip = elgg_get_plugin_setting('zip', 'fontawesome');
		
		if (empty($href) || empty($integrity) || !empty($zip)) {
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
	
	/**
	 * Register FontAwesome icons from a uploaded file
	 *
	 * @param \Elgg\Hook $hook 'head', 'page'
	 *
	 * @return []
	 */
	public static function addFontAwesomeFromUpload(\Elgg\Hook $hook) {
		
		$zip = elgg_get_plugin_setting('zip', 'fontawesome');
		if (empty($zip)) {
			return;
		}
		
		elgg_unregister_external_file('css', 'font-awesome');
		
		$return = $hook->getValue();
		
		$return['links']['font-awesome'] = [
			'rel' => 'stylesheet',
			'href' => elgg_get_simplecache_url('fontawesome/webfont/css/all.css'),
		];
		
		return $return;
	}
}
