<?php
/**
 * HTML attribute filters.
 * Most of these functions filter the generic values from the framework found in hoot/functions/attr.php
 * Attributes for non-generic structural elements (mostly theme specific) can be loaded in this file.
 *
 * @package hoot
 * @subpackage dispatch
 * @since dispatch 1.0
 */

/* Modify Original Filters from Framework */
add_filter( 'hoot_attr_content', 'hoot_theme_attr_content' );
add_filter( 'hoot_attr_sidebar', 'hoot_theme_attr_sidebar', 10, 2 );

/* New Theme Filters */
add_filter( 'hoot_attr_page_wrapper', 'hoot_theme_attr_page_wrapper' );
add_filter( 'hoot_attr_page_template_content', 'hoot_theme_page_template_content', 10, 2 );

/* Misc Filters */
add_filter( 'hoot_attr_social_icons_icon', 'hoot_theme_attr_social_icons_icon', 10, 2 );
add_filter( 'hoot_attr_page_wrapper', 'hoot_theme_attr_page_wrapper_plugins' );

/**
 * Modify Main content container of the page attributes.
 *
 * @since 1.0
 * @access public
 * @param array $attr
 * @return array
 */
function hoot_theme_attr_content( $attr ) {
	$layout_class = hoot_main_layout_class( 'content' );
	if ( !empty( $layout_class ) ) {
		if ( isset( $attr['class'] ) )
			$attr['class'] .= ' ' . $layout_class;
		else
			$attr['class'] = $layout_class;
	}

	return $attr;
}

/**
 * Modify Sidebar attributes.
 *
 * @since 1.0
 * @access public
 * @param array $attr
 * @param string $context
 * @return array
 */
function hoot_theme_attr_sidebar( $attr, $context ) {
	if ( !empty( $context ) && $context == 'primary' ) {
		$layout_class = hoot_main_layout_class( 'primary-sidebar' );
		if ( !empty( $layout_class ) ) {
			if ( isset( $attr['class'] ) )
				$attr['class'] .= ' ' . $layout_class;
			else
				$attr['class'] = $layout_class;
		}
	}

	return $attr;
}

/**
 * Page wrapper attributes.
 *
 * @since 1.0
 * @access public
 * @param array $attr
 * @return array
 */
function hoot_theme_attr_page_wrapper( $attr ) {
	$attr['id'] = 'page-wrapper';
	$attr['class'] = ( empty( $attr['class'] ) ) ? '' : $attr['class'];

	// Set site layout class
	$site_layout = hoot_get_mod( 'site_layout' );
	$attr['class'] .= ( $site_layout == 'boxed' ) ? ' grid site-boxed' : ' site-stretch';
	$attr['class'] .= ' page-wrapper';

	// Set sidebar layout class
	global $hoot_theme;
	if ( empty( $hoot_theme->currentlayout ) )
		hoot_main_layout('');
	$attr['class'] .= ( !empty( $hoot_theme->currentlayout['layout'] ) ) ? ' layout-'. $hoot_theme->currentlayout['layout'] : '';

	return $attr;
}

/**
 * Main content container of the page attributes when a page template is being displayed
 *
 * @since 1.0
 * @access public
 * @param array $attr
 * @param string $context
 * @return array
 */
function hoot_theme_page_template_content( $attr, $context ) {

	if ( is_page_template() && $context == 'none' ) {
		$attr['id']       = 'content';
		$attr['class']    = 'content sidebar-none';
		$attr['role']     = 'main';
		$attr['itemprop'] = 'mainContentOfPage';
		$template_slug = basename( get_page_template(), '.php' );
		$attr['class'] .= ' ' . sanitize_html_class( 'content-' . $template_slug );
	} elseif ( function_exists( 'hoot_attr_content' ) ) {
		// Get page attributes for main content container of a non-template regular page
		$attr = apply_filters( "hoot_attr_content", $attr, $context );
	}

	return $attr;
}

/**
 * Social Icons Widget - Icons
 *
 * @since 2.0
 * @access public
 * @param array $attr
 * @param string $context
 * @return array
 */
function hoot_theme_attr_social_icons_icon( $attr, $context ) {
	$attr['class'] = ( empty( $attr['class'] ) ) ? '' : $attr['class'];

	$attr['class'] .= ' social-icons-icon';
	if ( $context != 'email' )
		$attr['target'] = '_blank';

	return $attr;
}

/**
 * Page wrapper attributes for external plugins
 *
 * @since 2.3
 * @access public
 * @param array $attr
 * @return array
 */
function hoot_theme_attr_page_wrapper_plugins( $attr ) {
	$attr['class'] = ( empty( $attr['class'] ) ) ? '' : $attr['class'];

	$classes = apply_filters( 'hoot_theme_attr_page_wrapper_plugins', array( 'hoot-cf7-style', 'hoot-mapp-style', 'hoot-jetpack-style' ) );
	$classes = array_map( 'sanitize_html_class', $classes );
	foreach ( $classes as $class ) {
		$attr['class'] .= ' ' . $class;
	}

	return $attr;
}
