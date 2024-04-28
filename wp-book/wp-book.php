<?php
/**
 * Plugin Name: WP Book
 * Description: A WordPress plugin for managing books, categories, and book-related features.
 * Version: 1.0.0
 * Author: Ambuj Pandey
 * Author URI: https://github.com/Ambuj-Pandey/wp-book
 * Domain Path: /languages/
 */

// Defining constants for paths
define( 'WP_BOOK_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WP_BOOK_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

include_once WP_BOOK_PLUGIN_DIR . 'includes/wp-book-custom-post-type.php';
include_once WP_BOOK_PLUGIN_DIR . 'includes/wp-book-hierarchical-taxonomy.php';