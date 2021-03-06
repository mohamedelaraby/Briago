<?php

namespace WPGMZA;

class Upgrader
{
	public function upgrade($fromVersion)
	{
		// NB: We don't use the global plugin object here because it's not initialised yet
		$settings = new GlobalSettings();
		
		if(preg_match('/^7\./', $fromVersion))
		{
			// Legacy style for upgrading users
			$settings->user_interface_style = "legacy";
		}
		
		add_action('init', function() {
			global $wpgmza;
			$wpgmza->updateAllMarkerXMLFiles();
		});
	}
}
