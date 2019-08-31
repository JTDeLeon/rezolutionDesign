<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Shortcodes
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

add_shortcode( 'footer_backtotop', 'genesis_footer_backtotop_shortcode' );
/**
 * Produces the "Return to Top" link.
 *
 * Supported shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is empty string),
 *   href (link url, default is fragment identifier '#wrap'),
 *   nofollow (boolean for whether to make the link include the rel="nofollow"
 *     attribute. Default is true),
 *   text (Link text, default is 'Return to top of page').
 *
 * Output passes through `genesis_footer_backtotop_shortcode` filter before returning.
 *
 * @since 1.1.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_backtotop` shortcode.
 */
function genesis_footer_backtotop_shortcode( $atts ) {

	$defaults = array(
		'after'    => '',
		'before'   => '',
		'href'     => '#wrap',
		'nofollow' => true,
		'text'     => __( 'Return to top of page', 'genesis' ),
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_backtotop' );

	$nofollow = $atts['nofollow'] ? 'rel="nofollow"' : '';

	$output = sprintf( '%s<a href="%s" %s>%s</a>%s', $atts['before'], esc_url( $atts['href'] ), $nofollow, $atts['text'], $atts['after'] );

	if ( genesis_html5() ) {
		$output = '';
	}

	return apply_filters( 'genesis_footer_backtotop_shortcode', $output, $atts );

}

add_shortcode( 'footer_copyright', 'genesis_footer_copyright_shortcode' );
/**
 * Adds the visual copyright notice.
 *
 * Supported shortcode attributes are:
 *   after (output after notice, default is empty string),
 *   before (output before notice, default is empty string),
 *   copyright (copyright notice, default is copyright character like (c) ),
 *   first(year copyright first applies, default is empty string).
 *
 * If the 'first' attribute is not empty, and not equal to the current year, then
 * output will be formatted as first-current year (e.g. 1998-2020).
 * Otherwise, output is just given as the current year.
 *
 * Output passes through `genesis_footer_copyright_shortcode` filter before returning.
 *
 * @since 1.1.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_copyright` shortcode.
 */
function genesis_footer_copyright_shortcode( $atts ) {

	$defaults = array(
		'after'     => '',
		'before'    => '',
		'copyright' => '&#x000A9;',
		'first'     => '',
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_copyright' );

	$output = $atts['before'] . $atts['copyright'] . '&nbsp;';

	if ( '' !== $atts['first'] && date( 'Y' ) !== $atts['first'] ) {
		$output .= $atts['first'] . '&#x02013;';
	}

	$output .= date( 'Y' ) . $atts['after'];

	return apply_filters( 'genesis_footer_copyright_shortcode', $output, $atts );

}

add_shortcode( 'footer_childtheme_link', 'genesis_footer_childtheme_link_shortcode' );
/**
 * Adds the link to the child theme, if the details are defined.
 *
 * Supported shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is a string with a middot character).
 *
 * Output passes through `genesis_footer_childtheme_link_shortcode` filter before returning.
 *
 * @since 1.1.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return null|string Return empty string early if not a child theme, or `CHILD_THEME_NAME` or `CHILD_THEME_URL`
 *                     are not defined. Otherwise return output for `footer_childtheme_link` shortcode.
 */
function genesis_footer_childtheme_link_shortcode( $atts ) {

	if ( ! defined( 'CHILD_THEME_NAME' ) || ! defined( 'CHILD_THEME_URL' ) || ! is_child_theme() ) {
		return null;
	}

	$defaults = array(
		'after'  => '',
		'before' => '&#x000B7;',
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_childtheme_link' );

	$output = sprintf( '%s<a href="%s">%s</a>%s', $atts['before'], esc_url( CHILD_THEME_URL ), esc_html( CHILD_THEME_NAME ), $atts['after'] );

	return apply_filters( 'genesis_footer_childtheme_link_shortcode', $output, $atts );

}

add_shortcode( 'footer_genesis_link', 'genesis_footer_genesis_link_shortcode' );
/**
 * Adds link to the Genesis page on the StudioPress website.
 *
 * Supported shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is empty string).
 *
 * Output passes through `genesis_footer_genesis_link_shortcode` filter before returning.
 *
 * @since 1.1.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_genesis_link` shortcode.
 */
function genesis_footer_genesis_link_shortcode( $atts ) {

	$defaults = array(
		'after'  => '',
		'before' => '',
		'url'    => 'https://my.studiopress.com/themes/genesis/',
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_genesis_link' );

	$output = $atts['before'] . '<a href="' . esc_url( $atts['url'] ) . '">Genesis Framework</a>' . $atts['after'];

	return apply_filters( 'genesis_footer_genesis_link_shortcode', $output, $atts );

}

add_shortcode( 'footer_studiopress_link', 'genesis_footer_studiopress_link_shortcode' );
/**
 * Adds link to the StudioPress home page.
 *
 * Supported shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is 'by ').
 *
 * Output passes through `genesis_footer_studiopress_link_shortcode` filter before returning.
 *
 * @since 1.2.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_studiopress_link` shortcode.
 */
function genesis_footer_studiopress_link_shortcode( $atts ) {

	$defaults = array(
		'after'  => '',
		'before' => __( 'by', 'genesis' ),
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_studiopress_link' );

	$output = $atts['before'] . ' <a href="https://www.studiopress.com/">StudioPress</a>' . $atts['after'];

	return apply_filters( 'genesis_footer_studiopress_link_shortcode', $output, $atts );

}

add_shortcode( 'footer_wordpress_link', 'genesis_footer_wordpress_link_shortcode' );
/**
 * Adds link to WordPress - https://wordpress.org/ .
 *
 * Supported shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is empty string).
 *
 * Output passes through `genesis_footer_wordpress_link_shortcode` filter before returning.
 *
 * @since 1.1.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_wordpress_link` shortcode.
 */
function genesis_footer_wordpress_link_shortcode( $atts ) {

	$defaults = array(
		'after'  => '',
		'before' => '',
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_wordpress_link' );

	$output = sprintf( '%s<a href="%s">%s</a>%s', $atts['before'], 'https://wordpress.org/', 'WordPress', $atts['after'] );

	return apply_filters( 'genesis_footer_wordpress_link_shortcode', $output, $atts );

}

add_shortcode( 'footer_site_title', 'genesis_footer_site_title_shortcode' );
/**
 * Produces the site title.
 *
 * Supported shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is empty string).
 *
 * Output passes through `genesis_footer_site_title_shortcode` filter before returning.
 *
 * @since 2.3.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_site_title` shortcode.
 */
function genesis_footer_site_title_shortcode( $atts ) {

	$defaults = array(
		'after'  => '',
		'before' => '',
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_site_title' );

	$output = $atts['before'] . get_bloginfo( 'name' ) . $atts['after'];

	return apply_filters( 'genesis_footer_site_title_shortcode', $output, $atts );

}

add_shortcode( 'footer_home_link', 'genesis_footer_home_link_shortcode' );
/**
 * Produces a link to the home URL.
 *
 * Supported shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is empty string),
 *   text (link text, default is site title).
 *
 * Output passes through `genesis_footer_home_link_shortcode` filter before returning.
 *
 * @since 2.3.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_home_link` shortcode.
 */
function genesis_footer_home_link_shortcode( $atts ) {

	$defaults = array(
		'after'  => '',
		'before' => '',
		'text'   => get_bloginfo( 'name' ),
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_home_link' );

	$output = sprintf( '%s<a href="%s">%s</a>%s', $atts['before'], home_url(), $atts['text'], $atts['after'] );

	return apply_filters( 'genesis_footer_home_link_shortcode', $output, $atts );

}

add_shortcode( 'footer_loginout', 'genesis_footer_loginout_shortcode' );
/**
 * Adds admin login / logout link.
 *
 * Support shortcode attributes are:
 *   after (output after link, default is empty string),
 *   before (output before link, default is empty string),
 *   redirect (path to redirect to on login, default is empty string).
 *
 * Output passes through `genesis_footer_loginout_shortcode` filter before returning.
 *
 * @since 1.1.0
 *
 * @param array|string $atts Shortcode attributes. Empty string if no attributes.
 * @return string Output for `footer_loginout` shortcode.
 */
function genesis_footer_loginout_shortcode( $atts ) {

	$defaults = array(
		'after'    => '',
		'before'   => '',
		'redirect' => '',
	);
	$atts     = shortcode_atts( $defaults, $atts, 'footer_loginout' );

	if ( ! is_user_logged_in() ) {
		$link = '<a href="' . esc_url( wp_login_url( $atts['redirect'] ) ) . '">' . __( 'Log in', 'genesis' ) . '</a>';
	} else {
		$link = '<a href="' . esc_url( wp_logout_url( $atts['redirect'] ) ) . '">' . __( 'Log out', 'genesis' ) . '</a>';
	}

	$output = $atts['before'] . apply_filters( 'loginout', $link ) . $atts['after']; // WPCS: prefix ok.

	return apply_filters( 'genesis_footer_loginout_shortcode', $output, $atts );

}
