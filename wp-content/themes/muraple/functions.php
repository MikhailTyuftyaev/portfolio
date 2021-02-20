<?php 

function add_my_theme_stylesheet() {
    $template_uri = get_template_directory_uri();

    // loads stylesheet

    wp_enqueue_style( 'style_css', get_stylesheet_uri(), array(), null );
    wp_enqueue_style( 'bootstrap_css', $template_uri . '/plugin/bootstrap/css/bootstrap.min.css', array(), null);
    wp_enqueue_style( 'font_awesome_css', $template_uri . '/plugin/font-awesome/css/all.min.css', array(), null );
    wp_enqueue_style( 'et_line_css', $template_uri . '/plugin/et-line/style.css', array(), null );
    wp_enqueue_style( 'themify_icons_css', $template_uri . '/plugin/themify-icons/themify-icons.css', array(), null );
    wp_enqueue_style( 'owl_carousel_css', $template_uri . '/plugin/owl-carousel/css/owl.carousel.min.css', array(), null );
    wp_enqueue_style( 'magnific_css', $template_uri . '/plugin/magnific/magnific-popup.css', array(), null );
    wp_enqueue_style( 'master_css', $template_uri . '/style/master.css', array(), null );
}


function add_my_theme_js() {
    $template_uri = get_template_directory_uri();
    
     // loads scripts
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'custom_js', $template_uri . '/js/custom.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap_js', $template_uri . '/plugin/bootstrap/js/bootstrap.js', array('jquery'), null, true );
    wp_enqueue_script( 'popper_js', $template_uri . '/plugin/bootstrap/js/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'isotope_js', $template_uri . '/plugin/isotope/isotope.pkgd.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'appear_js', $template_uri . '/plugin/appear/jquery.appear.js', array('jquery'), null, true);
    wp_enqueue_script( 'countTo_js', $template_uri . '/plugin/counter/jquery.countTo.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'owl_carousel_js', $template_uri . '/plugin/owl-carousel/js/owl.carousel.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'magnific_js', $template_uri . '/plugin/magnific/jquery.magnific-popup.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'send_js', $template_uri . '/js/mail_send.js', array('jquery'), null, true );

    // load slider for main page
    if( is_home() ){
        wp_enqueue_script( 'slick_js', $template_uri . '/plugin/slick/slick.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'slider_js', $template_uri . '/js/slider.js', array('jquery'), null, true );
     }
}

/* Action for loading your custom stylesheet and scripts*/

add_action( 'wp_enqueue_scripts', 'add_my_theme_stylesheet' );
add_action( 'wp_footer', 'add_my_theme_js' );

add_filter( 'excerpt_length', function(){
    return 15;
} );

add_filter( 'excerpt_more', function($more) {
    return '...';
});

add_filter( 'jpeg_quality', function(){
    return 100;
});

add_theme_support( 'post-thumbnails' );

add_image_size('bigfitured', 683, 371, true);
add_image_size('midfitured', 350, 263, true);

/* Calculates the age*/

function get_age( $birthday ){

	$diff = date( 'Ymd' ) - date( 'Ymd', strtotime($birthday) );

	return substr( $diff, 0, -4 );
}