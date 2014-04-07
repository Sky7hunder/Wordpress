<?php
/*
*Proper way to enqueue scripts and styles
*/
function geekhub_scripts(){
	wp_enqueue_style('geekhub-style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','geekhub_scripts');

register_nav_menus( array(
	'main_menu' => 'Main Menu'
));

add_theme_support('post-thumbnails');

/***********************************************************************/
/******************************CUSTOM LOGO******************************/
/***********************************************************************/


function themeslug_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'geekhub' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
	$wp_customize->add_setting( 'themeslug_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'geekhub' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );
}
add_action('customize_register', 'themeslug_theme_customizer');

///////////////////////////////////////////////////////////////
////////////////////////CUSTOM TEXT ON HOME////////////////////
///////////////////////////////////////////////////////////////

function text_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'text_section_one',
        array(
            'title' => 'Text Settings',
            'description' => 'This is a settings section.',
            'priority' => 35,
        )
    );
	$wp_customize->add_setting(
		'copyright_textbox',
		array(
			'default' => 'Default copyright text',
		)
	);
	$wp_customize->add_control(
		'copyright_textbox',
		array(
			'label' => 'Text',
			'section' => 'text_section_one',
			'type' => 'text',
		)
	);
}
add_action( 'customize_register', 'text_customizer' );
	
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'sidebar',
		'id' => 'home_right_1',
		'class' => 'like-box',
		'before_widget' => ' ',
		'after_widget' => ' ',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'social-links',
		'id' => 'home_right_2',
		'class' => 'social-links',
		'before_widget' => ' ',
		'after_widget' => ' ',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/***********************************************************************/
/*********************CUSTOM POST TYPE - OUR COURSES********************/
/***********************************************************************/

add_action( 'init', 'register_cpt_courses' );

function register_cpt_courses() {

    $labels = array( 
        'name' => _x( 'Our courses', 'geekhub' ),
        'singular_name' => _x( 'Course', 'geekhub' ),
        'add_new' => _x( 'Add New', 'geekhub' ),
        'add_new_item' => _x( 'Add New course', 'geekhub' ),
        'edit_item' => _x( 'Edit course', 'geekhub' ),
        'new_item' => _x( 'New course', 'geekhub' ),
        'view_item' => _x( 'View course', 'geekhub' ),
        'search_items' => _x( 'Search courses', 'geekhub' ),
        'not_found' => _x( 'No courses found', 'geekhub' ),
        'not_found_in_trash' => _x( 'No courses found in Trash', 'geekhub' ),
        'parent_item_colon' => _x( 'Parent course:', 'geekhub' ),
        'menu_name' => _x( 'Our courses', 'geekhub' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom post type for Our courses',
        'supports' => array( 'title', 'editor', 'thumbnail'),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'courses', $args );
}

/***********************************************************************/
/*********************CUSTOM POST TYPE - TEACHERS***********************/
/***********************************************************************/

add_action( 'init', 'register_cpt_teachers' );

function register_cpt_teachers() {

    $labels = array( 
        'name' => _x( 'Know our!', 'geekhub' ),
        'singular_name' => _x( 'teacher', 'geekhub' ),
        'add_new' => _x( 'Add New', 'geekhub' ),
        'add_new_item' => _x( 'Add New teacher', 'geekhub' ),
        'edit_item' => _x( 'Edit teacher', 'geekhub' ),
        'new_item' => _x( 'New teacher', 'geekhub' ),
        'view_item' => _x( 'View teacher', 'geekhub' ),
        'search_items' => _x( 'Search teacher', 'geekhub' ),
        'not_found' => _x( 'No teachers found', 'geekhub' ),
        'not_found_in_trash' => _x( 'No teachers found in Trash', 'geekhub' ),
        'parent_item_colon' => _x( 'Parent teacher:', 'geekhub' ),
        'menu_name' => _x( 'Teachers', 'geekhub' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom post type for teachers',
        'supports' => array( 'title', 'editor', 'thumbnail'),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'teachers', $args );
}

/***********************************************************************/
/*********************CUSTOM POST TYPE - SPONSORS***********************/
/***********************************************************************/

add_action( 'init', 'register_cpt_sponsors' );

function register_cpt_sponsors() {

    $labels = array( 
        'name' => _x( 'Our sponsors', 'geekhub' ),
        'singular_name' => _x( 'sponsor', 'geekhub' ),
        'add_new' => _x( 'Add New', 'geekhub' ),
        'add_new_item' => _x( 'Add New sponsor', 'geekhub' ),
        'edit_item' => _x( 'Edit sponsor', 'geekhub' ),
        'new_item' => _x( 'New sponsor', 'geekhub' ),
        'view_item' => _x( 'View sponsor', 'geekhub' ),
        'search_items' => _x( 'Search sponsor', 'geekhub' ),
        'not_found' => _x( 'Sponsor not found', 'geekhub' ),
        'not_found_in_trash' => _x( 'Sponsor not found in Trash', 'geekhub' ),
        'parent_item_colon' => _x( 'Parent sponsor:', 'geekhub' ),
        'menu_name' => _x( 'Sponsors', 'geekhub' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom post type for sponsors',
        'supports' => array( 'title', 'editor', 'thumbnail'),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'sponsors', $args );
}