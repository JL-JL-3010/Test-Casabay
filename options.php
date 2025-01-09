<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	//$themename = get_option( 'stylesheet' );
	//$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$themename = 'iwcd7';

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings[ 'id' ] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$main_slide = array(
		'' => __( 'Default Slick', 'options_check' ),
		'slide2' => __( 'Superslides', 'options_check' )
	);

	$gallery_array = array(
		'' => __( 'Default Fancybox', 'options_check' ),
		'gallery1' => __( 'Pretty Photo', 'options_check' ),
		'gallery2' => __( 'Galleria', 'options_check' )
	);

	$checkbox_layout = array(
		'' => __( 'Default', 'options_check' ),
		'checkbox-2' => __( 'Style 2', 'options_check' )
	);

	$offer_layout = array(
		'' => __( 'Default', 'options_check' ),
		'content-left' => __( 'Content Left', 'options_check' ),
		'content-right' => __( 'Content Right', 'options_check' )
	);

	$accom_layout = array(
		'' => __( 'Default', 'options_check' ),
		'layout-2' => __( 'Layout 2', 'options_check' )
	);

	$facility_layout = array(
		'' => __( 'Default', 'options_check' ),
		'style-2' => __( 'Style 2', 'options_check' )
	);

	$dining_layout = array(
		'' => __( 'Default', 'options_check' ),
		'style-2' => __( 'Style 2', 'options_check' )
	);

	$home_map = array(
		'' => __( 'Default Map Left', 'options_check' ),
		'map-right' => __( 'Map Right', 'options_check' )
	);

	if ( function_exists( "qtrans_getSortedLanguages" ) ) {

		$languages = qtrans_getSortedLanguages( true );
		foreach ( $languages as $language ) {

			$language_array[ $language ] = qtrans_getLanguageName( $language );
		}

	}

	// Multicheck Defaults
	$multicheck_defaults = array(
		'en' => '1'
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ( $options_categories_obj as $category ) {
		$options_categories[ $category->cat_ID ] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[ $tag->term_id ] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[ '' ] = 'Select a page:';
	foreach ( $options_pages_obj as $page ) {
		$options_pages[ $page->ID ] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath = get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'options_check' ),
		'type' => 'heading' );

	$options[] = array(
		'name' => __( 'Header Logo', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'header_logo',
		'type' => 'upload' );

	$options[] = array(
		'name' => __( 'Footer Logo', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'footer_logo',
		'type' => 'upload' );




	$options[] = array(
		'name' => __( 'Telephone', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'telephone',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
		'name' => __( 'Email', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'email',
		'std' => '',
		'type' => 'text' );


	$options[] = array(
		'name' => __( 'Facebook Link', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'facebook_link',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
		'name' => __( 'Instagram Link', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'instagram_link',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
		'name' => __( 'Twitter Link', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'twitter_link',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
		'name' => __( 'Google Plus Link', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'google_plus_link',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
		'name' => __( 'Youtube Link', 'options_check' ),
		'desc' => __( '', 'youtube_check' ),
		'id' => 'youtube_link',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
		'name' => __( 'Tripadvisor Link', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'tripadvisor_link',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
		'name' => __( 'Awards Link', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'awards_link',
		'std' => '',
		'type' => 'text' );


	$options[] = array(
		'name' => __( 'Booking Link', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'booking_link',
		'std' => '',
		'type' => 'text' );

	$options[] = array(
	'name' => __('Maximum Rooms', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'max_rooms',
	'std' => '',
	'type' => 'text');

      $options[] = array(
	'name' => __('Default Rooms', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'default_rooms',
	'std' => '',
	'type' => 'text');

      $options[] = array(
	'name' => __('Maximum Adults', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'max_adults',
	'std' => '',
	'type' => 'text');

      $options[] = array(
	'name' => __('Default Adults', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'default_adults',
	'std' => '',
	'type' => 'text');

      $options[] = array(
	'name' => __('Maximum Childrens', 'options_check'),
	'desc' => __('', 'options_check'),
	'id' => 'max_childs',
	'std' => '',
	'type' => 'text');


	if ( function_exists( "qtrans_getSortedLanguages" ) ) {
		$options[] = array(
			'name' => __( 'Show language', 'options_check' ),
			'desc' => __( '', 'options_check' ),
			'id' => 'show_language',
			'std' => $multicheck_defaults, // These items get checked by default
			'type' => 'multicheck',
			'options' => $language_array );
	}

	$options[] = array(
		'name' => __( 'Google Analytics', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'google_analytics',
		'std' => '',
		'type' => 'text' );


	$options[] = array(
		'name' => __( 'Google Map Key', 'options_check' ),
		'desc' => __( '', 'options_check' ),
		'id' => 'google_map_key',
		'std' => '',
		'type' => 'text' );

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Address', 'options_check' ),
		//'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'address',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$options[] = array(
			'name' => __( 'Copyright', 'options_check' ),
			'desc' => __( '', 'options_check' ),
			'id' => 'copyright',
			'type' => 'editor',
			'settings' => $wp_editor_settings );

	$options[] = array(
			'name' => __( 'Design by', 'options_check' ),
			'desc' => __( '', 'options_check' ),
			'id' => 'design_by',
			'type' => 'editor',
			'settings' => $wp_editor_settings );


	/*Welcome Dashboard*/
	$options[] = array(
		'name' => __( 'Welcome Dashboard', 'options_check' ),
		'type' => 'heading' );

	$wp_editor_settings_dash = array(
		'wpautop' => true, // Default
		'textarea_rows' => 10,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Welcome Dashboard Detail', 'options_check' ),
		'desc' => '',
		'id' => 'welcome_dashboard',
		'type' => 'editor',
		'settings' => $wp_editor_settings_dash );


	return $options;
}
