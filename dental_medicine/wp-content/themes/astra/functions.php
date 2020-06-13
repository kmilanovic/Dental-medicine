<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '2.1.4' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to latest version.
 */
define( 'ASTRA_EXT_MIN_VER', '2.0.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';
/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';


/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';


/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-filesystem.php';
add_filter( 'astra_single_post_navigation_enabled', '__return_false' );

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

function registriraj_clan_cpt() {
$labels = array(
'name' => _x( 'Clanovi', 'Post Type General Name', 'astra' ),
'singular_name' => _x( 'Clan', 'Post Type Singular Name', 'astra' ),
'menu_name' => __( 'Clanovi', 'astra' ),
'name_admin_bar' => __( 'Clanovi', 'astra' ),
'archives' => __( 'Clanovi arhiva', 'astra' ),
'attributes' => __( 'Atributi', 'astra' ),
'parent_item_colon' => __( 'Roditeljski element', 'astra' ),
'all_items' => __( 'Svi clanovi', 'astra' ),
'add_new_item' => __( 'Dodaj novoga clana', 'astra' ),
	
'add_new' => __( 'Dodaj novi', 'astra' ),
'new_item' => __( 'Novi clan', 'astra' ),
'edit_item' => __( 'Uredi clana', 'astra' ),
'update_item' => __( 'Ažuriraj clana', 'astra' ),
'view_item' => __( 'Pogledaj clana', 'astra' ),
'view_items' => __( 'Pogledaj clanove', 'astra' ),
'search_items' => __( 'Pretraži clanove', 'astra' ),
'not_found' => __( 'Nije pronađeno', 'astra' ),
'not_found_in_trash' => __( 'Nije pronađeno u smeću', 'astra' ),
'featured_image' => __( 'Glavna slika', 'astra' ),
'set_featured_image' => __( 'Postavi glavnu sliku', 'astra' ),
'remove_featured_image' => __( 'Ukloni glavnu sliku', 'astra' ),
'use_featured_image' => __( 'Postavi za glavnu sliku', 'astra' ),
'insert_into_item' => __( 'Umentni', 'astra' ),
'uploaded_to_this_item' => __( 'Preneseno', 'astra' ),
'items_list' => __( 'Lista', 'astra' ),
'items_list_navigation' => __( 'Navigacija među clanovima', 'astra' ),
'filter_items_list' => __( 'Filtriranje clanova', 'astra' ),
);
$args = array(
'label' => __( 'Clan', 'astra' ),
'description' => __( 'Clan post type', 'astra' ),
'labels' => $labels,
'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
'hierarchical' => false,
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_position' => 5,
'menu_icon' => 'dashicons-groups',
'show_in_admin_bar' => true,
'show_in_nav_menus' => true,
'can_export' => false,
'has_archive' => true,
'exclude_from_search' => false,
'publicly_queryable' => true,
'capability_type' => 'page',
);
register_post_type( 'clan', $args );
}
add_action( 'init', 'registriraj_clan_cpt', 0 );

function registriraj_taksonomiju_zvanje() {
$labels = array(
'name' => _x( 'Zvanja', 'Taxonomy General Name', 'astra' ),
'singular_name' => _x( 'Zvanje', 'Taxonomy Singular Name', 'astra' ),
'menu_name' => __( 'Zvanja', 'astra' ),
'all_items' => __( 'Sva zvanja', 'astra' ),
'parent_item' => __( 'Roditeljsko zvanje', 'astra' ),
'parent_item_colon' => __( 'Roditeljsko zvanje', 'astra' ),
'new_item_name' => __( 'Novo zvanje', 'astra' ),
'add_new_item' => __( 'Dodaj novo zvanje', 'astra' ),
'edit_item' => __( 'Uredi zvanje', 'astra' ),
'update_item' => __( 'Ažuiriraj zvanje', 'astra' ),
'view_item' => __( 'Pogledaj zvanje', 'astra' ),
'separate_items_with_commas' => __( 'Odvojite zvanja sa zarezima', 'astra' ),
'add_or_remove_items' => __( 'Dodaj ili ukloni naslovno zvanje', 'astra' ),
'choose_from_most_used' => __( 'Odaberi među najčešće korištenima', 'astra' ),
'popular_items' => __( 'Popularna zvanja', 'astra' ),
'search_items' => __( 'Pretraga', 'astra' ),
'not_found' => __( 'Nema rezultata', 'astra' ),
'no_terms' => __( 'Nema zvanja', 'astra' ),
'items_list' => __( 'Lista zvanja', 'astra' ),
'items_list_navigation' => __( 'Navigacija', 'astra' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'public' => true,
'show_ui' => true,
'show_admin_column' => true,
'show_in_nav_menus' => true,
'show_tagcloud' => true,
);
register_taxonomy( 'zvanje', array( 'clan' ), $args );
}
add_action( 'init', 'registriraj_taksonomiju_zvanje', 0 );

function daj_clanove( $slug )
{
$args = array(
	'posts_per_page' => -1,
	'post_type' => 'clan',
	'post_status' => 'publish',
	'tax_query' => array(
		array(
			'taxonomy' => 'zvanje',
			'field' => 'slug',
			'terms' => $slug
			)
));
$clanovi = get_posts( $args );
foreach ($clanovi as $clan)
{
	$sClanUrl = $clan->guid;
	$sClanNaziv = $clan->post_title;
	$sHtml .= '<a style="margin-left:110px; font-size:20px" href="'.$sClanUrl.'">'.$sClanNaziv.'</a>';
}
return $sHtml;
}
