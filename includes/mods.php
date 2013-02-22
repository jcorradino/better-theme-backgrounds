<?php
/**
 * Retrieve background image for custom background.
 *
 * @since 3.0.0
 *
 * @return string
 */
function get_custom_background_image($tax="0") {
	return get_theme_mod("background_image_$tax", get_theme_support( 'custom-background', 'default-image' ) );
}

/**
 * Display background image path.
 *
 * @since 3.0.0
 */
function custom_background_image($tax="0") {
	echo get_custom_background_image($tax);
}

/**
 * Retrieve value for custom background color.
 *
 * @since 3.0.0
 *
 * @return string
 */
function get_custom_background_color($tax="0") {
	return get_theme_mod("background_color_$tax", get_theme_support( 'custom-background', 'default-color' ) );
}

/**
 * Display background color value.
 *
 * @since 3.0.0
 */
function custom_background_color($tax="0") {
	echo get_custom_background_color($tax);
}
?>