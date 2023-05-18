<?php
/**
 * Theme functions and definitions.
 *
 * @package ArtOfTheSoul
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'ART_OF_THE_SOUL', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function art_of_the_soul_scripts_styles() {

	wp_enqueue_style(
		'art-of-the-soul-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		ART_OF_THE_SOUL
	);

}
add_action( 'wp_enqueue_scripts', 'art_of_the_soul_scripts_styles', 20 );
