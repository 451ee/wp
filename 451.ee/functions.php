<?php


// Thumbnail sizes
add_image_size( 'featured', 638, 300, true );
add_image_size( 'small-thumb', 100, 100, true );

register_nav_menu( 'primary', 'Primary Menu' );
add_theme_support( 'post-thumbnails' );

function widgets_init() {
	register_sidebar(array(
		'name' => __( 'Footer' ),
		'id' => 'footer',
		'before_widget' => '<li id="%1$s" class="box %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	}
add_action( 'widgets_init', 'widgets_init' );



// enqueue styles

function theme_styles()  
{ 
    // This is the compiled css file from LESS - this means you compile the LESS file locally and put it in the appropriate directory if you want to make any changes to the master bootstrap.css.
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all' );
    wp_register_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all' );
    wp_register_style( 'wp-bootstrap', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
    
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap-responsive' );
    wp_enqueue_style( 'wp-bootstrap');
}
add_action('wp_enqueue_scripts', 'theme_styles');

// enqueue javascript

function theme_js(){

  wp_deregister_script('jquery'); // initiate the function  
  wp_register_script('jquery', get_template_directory_uri().'/js/libs/jquery-1.7.1.min.js', false, '1.7.1');

  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js');
  wp_register_script('wpbs-scripts', get_template_directory_uri().'/js/scripts.js');
  wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr.full.min.js');

  // wp_enqueue_script('less', array(''), '1.3.0', true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', array('jQuery'), '1.1', true);
  wp_enqueue_script('wpbs-scripts', array('jQuery'), '1.1', true);
  wp_enqueue_script('modernizr', array('jQuery'), '1.1', true);
}
add_action('wp_enqueue_scripts', 'theme_js');

function feat_init() {
    $args = array( 'public' => true, 'label' => 'Featured',  'query_var' => true, 'capability_type' => 'post', 'supports' => array( 'title', 'editor', 'thumbnail' ) );
    register_post_type( 'feat', $args );
}

add_action( 'init', 'feat_init' ); 

?>