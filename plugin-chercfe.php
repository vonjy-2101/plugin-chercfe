<?php
	/**
	 * Plugin Name: Bookin cherche
	 * Description: Croisière bookin
	 * Version: 0.1.0
	 * Author: Malagasy Label One
	 * Requires at least: 4.4
	 * Tested up to: 4.7
	 *
	 * Text Domain: plugin-chercfe
	 * Domain Path: /i18n/languages/
	 *
	 */
	define('BASEPAHT', dirname(__FILE__));
	 
	if ( ! defined( 'ABSPATH' ) ) {
	    exit; // Exit if accessed directly.
	}

	include_once('includes/class.bookin.php');
	define('BOOKIN', 'bookin_cherche');
	 
	function install(){
	  global $wpdb;
	  $bookin_cherche = $wpdb->prefix . BOOKIN;
	  $bookin_collate = $wpdb->get_charset_collate();
	  $bookin_structure = "CREATE TABLE IF NOT EXISTS $bookin_cherche (
	                            `id` int(11) NOT NULL AUTO_INCREMENT,
	                            `date` varchar(255) CHARACTER SET utf8 NOT NULL,
	                            `port` varchar(255) CHARACTER SET utf8 NOT NULL,
	                            `compagnie` varchar(255) CHARACTER SET utf8 NOT NULL,
	                            `image` varchar(255) CHARACTER SET utf8 NOT NULL,
	                            PRIMARY KEY (`id`)
	                          )
	                          $bookin_collate;";
	  $wpdb->get_var($bookin_structure);
	  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' ); 
	}                 
	register_activation_hook(__FILE__, 'install');
	function uninstall()
	{
	  global $wpdb;
	  $bookin_cherche = $wpdb->prefix . BOOKIN;
	  $wpdb->query("DROP TABLE IF EXISTS $bookin_cherche;");
	}
	register_uninstall_hook(__FILE__, 'uninstall');
	 
	new Bookin();

?>