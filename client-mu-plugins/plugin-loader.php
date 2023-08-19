<?php

$autoloadFile = __DIR__ . '/vendor/autoload.php';

if ( file_exists( $autoloadFile ) ) {
	require $autoloadFile;
}



/**
 * The above example requires the plugin to use a specific naming structure: /plugin-name/plugin-name.php
 * You can also specify a plugin's root file:
 * wpcom_vip_load_plugin( 'plugin-name/plugin.php' );
 *
 * wpcom_vip_load_plugin() only loads plugins from the `WP_PLUGIN_DIR` directory.
 * For client-mu-plugins use:
 * require __DIR__ . '/plugin-name/plugin-name.php';
 */
