<?php
/*-----------------------------------------------------------------------------------*/
/*	Register & enqueue styles/scripts Start
/*-----------------------------------------------------------------------------------*/ 

//Enqueue Css Files
function neuron_css_js() {	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '4.7.0', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '3.3.6', 'all' );	
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all' );	
	wp_enqueue_style( 'boots_nav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.2.0', 'all');
	wp_enqueue_style( 'owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.2.0', 'all' );
	wp_enqueue_style( 'neuron_style', get_stylesheet_uri() );

	
//Enqueue Js Files	 
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true ); 	
	wp_enqueue_script( 'bootsnav_js', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.1.3', true );
	wp_enqueue_script( 'neuron_script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
	
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'neuron_css_js' );

