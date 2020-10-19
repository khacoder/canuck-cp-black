<?php
/**
 * Main functions file
 *
 * This file is the WordPress functions.php file, which which contains many
 * of the functions for set up and operation of the theme
 *
 * @package     Canuck CP Black ClassicPress Child Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

/**
 * Theme Name:  Canuck CP Black
 * Theme URI:   http://demo3.kevinsspace.ca/
 * Description: Child theme for the Canuck CP WordPress Theme
 * Author:      Kevin Archibald
 * Author URI:  http://kevinsspace.ca/
 * Template:    canuck-cp
 * Version:     1.0.1
 */

/**
 * Add child theme styles.
 */
function canuckcp_enqueue_parent_theme_style() {
	wp_enqueue_style( 'canuck-cp-child', get_stylesheet_uri(), array( 'canuck-cp-template-child' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'canuckcp_enqueue_parent_theme_style' );
