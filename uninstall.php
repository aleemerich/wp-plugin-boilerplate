<?php
/**
* Fired when the plugin is uninstalled.
*
* @package Plugin_Name
* @author Seu Nome <email@example.com>
* @copyright 2022 Seu Nome
*/

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// @TODO: Define uninstall functionality here