<?php 

  /* Set the basic site attributes. */
  update_option( 'blogname', 'Pumpkin Programmer' ); 
  update_option( 'blogdescription', 'Inspiration for Innovation' ); 
  update_option( 'siteurl', 'http://pumpkinprogrammer.com' );
  update_option( 'home', 'http://pumpkinprogrammer.com' );
  update_option( 'admin_email', 'pumpkinprogrammer@gmail.com' );
  
  /* Customize the title displayed on the home page tab. */
  add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
  function baw_hack_wp_title_for_home( $title )
  {
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
      return __( 'Pumpkin Programmer', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
    }
    return $title;
  } 
  
  /* Add Bootstrap to theme */
  function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . 'bootstrap/js/bootstrap.min.js', array(), '3.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
  
  /* Add iHover to theme */
  function theme_add_ihover() {
        wp_enqueue_style( 'ihover-css', get_template_directory_uri() . '/ihover/ihover.css');
        wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'theme_add_ihover' );
  
  /* Add parallax scrolling to theme */
  /*
  function theme_add_parallax() {
    wp_enqueue_style( 'parallax-css', get_template_directory_uri() . '/parallax/parallax.css');
    wp_enqueue_script( 'modernizer-js', get_template_directory_uri() . 'parallax/modernizer.js', array() );
  }
  add_action( 'wp_enqueue_scripts', 'theme_add_parallax' );
  */
  
  /* Set the content width to a default value. */
  if ( ! isset( $content_width ) ) $content_width = 900;
  
  /* Allow RSS feed links. */
  add_theme_support( 'automatic-feed-links' );
  
  /* Allow featured images (a.k.a. thumbnails) for blog posts and pages. */
  add_theme_support( 'post-thumbnails' );
  
  /* Allow a search functionality to the website. */
  add_theme_support( 'html5', array( 'search-form' ) );
  
  /* Add functionality for displaying post excerpts. */
  function custom_excerpt_length( $length ) {
	return 30;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length');
  
  /* Add functionality for displaying "read more" links to posts. */
  function excerpt_read_more_link($output) {
    global $post;
    return $output . '<a href="'. get_permalink($post->ID) . '"> Read More...</a>';
  }
  add_filter('the_excerpt', 'excerpt_read_more_link');
  
  /* Stop WordPress from adding those annoying closing paragraph tags */
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  
  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
   add_theme_support( 'html5', array(
     'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
   ) );
  
  /*
   * Enable support for Post Formats.
   * See http://codex.wordpress.org/Post_Formats
   */
   add_theme_support( 'post-formats', array(
     'aside', 'image', 'video', 'quote', 'link',
   ) );
   
   /* Set up the WordPress core custom background feature. */
   add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
     'default-color' => 'ffffff',
     'default-image' => '',
	) ) );
  
  /* JQuery stuff */
  function wpbootstrap_scripts_with_jquery()
  {
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', 
	                     get_template_directory_uri() 
	                     .'/bootstrap/js/bootstrap.js', 
	                     array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
  }
  add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
?>