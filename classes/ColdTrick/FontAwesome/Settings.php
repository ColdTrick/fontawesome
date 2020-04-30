<?php

namespace ColdTrick\FontAwesome;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Settings {
	
	/**
	 * Checks if a new font awesome zip is uploaded or needs to be removed
	 *
	 * @param \Elgg\Hook $hook 'response' 'action:plugins/settings/save'
	 *
	 * @return void
	 */
	public static function checkZipUpload(\Elgg\Hook $hook) {
		if ($hook->getValue() instanceof \Elgg\Http\ErrorResponse) {
			return;
		}
		
		$plugin = elgg_get_plugin_from_id(get_input('plugin_id'));
		if (!$plugin instanceof \ElggPlugin || $plugin->getID() !== 'fontawesome') {
			return;
		}
		
		$zip = elgg_get_uploaded_file('zip');
		if ($zip instanceof UploadedFile) {
			self::uploadZip($zip, $plugin);
			return;
		}
		
		if (get_input('remove_zip')) {
			self::removeZip($plugin);
		}
	}
	
	/**
	 * Uploads the zip
	 *
	 * @param UploadedFile $zip    Uploaded zip file
	 * @param \ElggPlugin  $plugin FontAwesome plugin
	 *
	 * @return void
	 */
	protected static function uploadZip(UploadedFile $zip, \ElggPlugin $plugin) {
		$plugin->zip = $zip->getClientOriginalName();
		$archive = new \ZipArchive();
		if ($archive->open($zip->getPathname()) !== true) {
			register_error(elgg_echo('fontawesome:settings:save:zip_error'));
			return;
		}
		
		// remove existing upload
		self::removeZip($plugin);
		
		// extraction could take some time
		set_time_limit(0);
		
		$base_folder = elgg_get_data_path() . 'fontawesome';
		$archive->extractTo($base_folder);
		
		// rename folder for easier mapping in the future
		foreach(glob($base_folder . '/*', GLOB_ONLYDIR) as $item) {
			// rename the first folder we find
			rename($item, $base_folder . '/webfont');
			break;
		}
		
		$plugin->zip = $zip->getClientOriginalName();
		
		// view locations and simplecache need to be updated
		elgg_invalidate_caches();
	}
	
	/**
	 * Removes previously uploaded zip
	 *
	 * @param \ElggPlugin $plugin FontAwesome plugin
	 *
	 * @return void
	 */
	protected static function removeZip(\ElggPlugin $plugin) {
		if (empty($plugin->zip)) {
			return;
		}
		
		elgg_delete_directory(elgg_get_data_path() . 'fontawesome');
		
		unset($plugin->zip);
		
		// view locations and simplecache need to be updated
		elgg_invalidate_caches();
	}
}
