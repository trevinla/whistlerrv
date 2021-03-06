<?php

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'SMUZISF_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

define( 'SMUZISF_PLUGIN_URL', plugins_url( '',plugin_basename( __FILE__ ) ) );

define( 'SMUZISF_PLUGIN_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );

define( 'SMUZISF_PLUGIN_INCLUDE_ADMIN_DIRECTORY_NAME', 'admin/includes' );

define( 'SMUZISF_PLUGIN_INCLUDE_PUBLIC_DIRECTORY_NAME', 'public/includes' );

define( 'SMUZISF_PLUGIN_VIEW_DIRECTORY_NAME', 'views' );

define( 'SMUZISF_PLUGIN_CSS_DIRECTORY_NAME', 'css' );

define( 'SMUZISF_PLUGIN_JS_DIRECTORY_NAME', 'js' );

define( 'SMUZISF_PLUGIN_ADMIN_DIRECTORY', SMUZISF_PLUGIN_PATH . 'admin' . DIRECTORY_SEPARATOR );

define( 'SMUZISF_PLUGIN_PUBLIC_DIRECTORY', SMUZISF_PLUGIN_PATH . 'public' . DIRECTORY_SEPARATOR );

define( 'SMUZISF_PLUGIN_INCLUDE_ADMIN_DIRECTORY', SMUZISF_PLUGIN_PATH .
									  	SMUZISF_PLUGIN_INCLUDE_ADMIN_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'SMUZISF_PLUGIN_VIEW_DIRECTORY', SMUZISF_PLUGIN_PATH .
									  	SMUZISF_PLUGIN_VIEW_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'SMUZISF_PLUGIN_CSS_DIRECTORY', SMUZISF_PLUGIN_PATH .
									  	SMUZISF_PLUGIN_CSS_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'SMUZISF_PLUGIN_JS_DIRECTORY', SMUZISF_PLUGIN_PATH .
									  	SMUZISF_PLUGIN_JS_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'SMUZISF_PLUGIN_MAIN_FILE', SMUZISF_PLUGIN_PATH . 'SMUZISF.php' );

define(  'SMUZISF_SHORTCODE', 'socialfeed' );

define( 'SMUZISF_PLUGIN_VERSION', '1.0' );