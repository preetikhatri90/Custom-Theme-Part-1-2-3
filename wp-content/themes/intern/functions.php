<?php
/**
 * functions
 */
if (! function_exists('intern_theme_setup')) {
    function intern_theme_setup() {
        add_theme_support( 'title-tag' );
        /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
        add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
        register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'interns' ),
				'footer'  => __( 'Secondary menu', 'interns' ),
			)
		);
    }
}
add_action( 'after_setup_theme', 'intern_theme_setup' );

/**
 * Register custom widgets
 */
function interns_widget_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'interns' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'interns' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'interns_widget_init' );

/**
 * Enqueue
 */
function interns_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'intern-styles', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'intern-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/layout/scripts/jquery.min.js', false, null);
        wp_enqueue_script('jquery');
    }
 


	wp_register_script(
		'intern-easypiechart.min',
		get_template_directory_uri() . '/layout/scripts/jquery.easypiechart.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

    wp_enqueue_script('intern-backtotop', get_template_directory_uri() . '/layout/scripts/jquery.backtotop.js', ['jquery'], null, true);

    wp_enqueue_script(
        'intern-mobilemenu',
        get_template_directory_uri() . '/layout/scripts/jquery.mobilemenu.js',
        array( 'jquery' ),
        wp_get_theme()->get( 'Version' ),
        true
    );
    wp_enqueue_script('intern-easypiechart.min', get_template_directory_uri() . '/layout/scripts/jquery.easypiechart.min.js', ['jquery'], null, true);

}
add_action( 'wp_enqueue_scripts', 'interns_scripts' );

/**
 * create custom post type
 */







function interns_post_type_init(){
    $labels = array(
        'name' => _x('types', 'taxonomy general name'),
        'singular_name' => _x('type', 'taxonomy singular name'),
        'add_new' => __('Add type'),
        'add_new_item' => __('Add New type'),
        'edit_item' => __('Edit type'),
        'new_item' => __('New type'),
        'all_items' => __('All type'),
        'view_item' => __('View type'),
        'search_items' => __('Search type'),
        'not_found' => __('No type found'),
        'not_found_in_trash' => __('No type on trash'),
        'parent_item_colon' => '',
        'menu_name' => __('News')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'types'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'rewrite' => array( 'slug' => 'news' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );
    $labels = array(
        'name' => __('types'),
        'singular_name' => __('type'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All type'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new type'),
        'new_item_name' => __('New')
    );
    register_taxonomy('types', array('news'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'type_category',
		'all_items' => 'types',
		'query_var' => true,
        'show_admin_column' => true,
		'rewrite' => array('slug' => 'types'))
    );
    register_post_type('news', $args);
    // flush_rewrite_rules();
}
add_action('init', 'interns_post_type_init');





// function interns_post_type_init()
// {
//     register_post_type(
//         'news',
//         array(
//             'labels' => array(
//                 'name' => __('News', 'intern'),
//                 'singular_name' => __('News', 'intern'),
//             ),
//             'public' => true,
//             'publicly_queryable' => true,
//             'has_archive' => true,
//             'show_ui' => true,
//             'show_in_rest' => true,
//             // 'hierarchical' => true,
//             'menu_icon' => 'dashicons-welcome-write-blog',
//             'rewrite' => array( 'slug' => 'news' ),
//             'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
//         )
//     );
// }

// add_action('init', 'interns_post_type_init');

// add_action( 'init', 'create_types_hierarchical_taxonomy', 0 );
 
// //create a custom taxonomy name it types for your posts














 
// function create_types_hierarchical_taxonomy() {
 
 
//   $labels = array(
//     'name' => _x( 'types', 'taxonomy general name' ),
//     'singular_name' => _x( 'type', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search type' ),
//     'all_items' => __( 'All type' ),
//     'parent_item' => __( 'Parent type' ),
//     'parent_item_colon' => __( 'Parent type:' ),
//     'edit_item' => __( 'Edit type' ), 
//     'update_item' => __( 'Update type' ),
//     'add_new_item' => __( 'Add New type' ),
//     'new_item_name' => __( 'New type Name' ),
//     'menu_name' => __( 'types' ),
//   );    
 
//     // Now register the taxonomy
//   register_taxonomy('subjects',array('news'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'type' ),
//   ));
 
// }
/**
 * Add customizer
 */

require get_template_directory() . '/classes/class-intern-customize.php';
new Intern_Customize();



/**
 * Add copyright customizer
 */

require get_template_directory() . '/classes/copyright-footer.php';


/**
 * Create ACF BLocks
 */
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Hero/leadspace block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hero', 'leadspace' ),
        ));
    }
}

/**
 * debug function
 */
function internDebug($content)
{
    echo"<pre>";
    print_r($content);
    exit;
}
