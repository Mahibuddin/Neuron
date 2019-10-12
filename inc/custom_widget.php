<?php

// register footer sidebar one
add_action( 'widgets_init', 'neuron_foo_one_widgets' );
function neuron_foo_one_widgets() {
    register_sidebar( array(
        'name' => __( 'Footer One', 'neuron' ),
        'id' => 'footer-1',
        'description' => __( 'Add footer one widget here.', 'neuron' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
}

// register footer sidebar two
add_action( 'widgets_init', 'neuron_foo_two_widgets' );
function neuron_foo_two_widgets() {
    register_sidebar( array(
        'name' => __( 'Footer Two', 'neuron' ),
        'id' => 'footer-2',
        'description' => __( 'Add footer two widget here.', 'neuron' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
}

// register footer sidebar three
add_action( 'widgets_init', 'neuron_foo_three_widgets' );
function neuron_foo_three_widgets() {
    register_sidebar( array(
        'name' => __( 'Footer Three', 'neuron' ),
        'id' => 'footer-3',
        'description' => __( 'Add footer three widget here.', 'neuron' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
}

// register footer sidebar four
add_action( 'widgets_init', 'neuron_foo_four_widgets' );
function neuron_foo_four_widgets() {
    register_sidebar( array(
        'name' => __( 'Footer Four', 'neuron' ),
        'id' => 'footer-4',
        'description' => __( 'Add footer four widget here.', 'neuron' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}

// ================================================= Latest Post Widget Shortcode ==========================


add_filter('widget_text', 'do_shortcode');
// register shortcode for latest post widget
function latest_post_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $list .= '
        <li>
			'.get_the_post_thumbnail($idd, 'thumbnail').'
			<p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
			<span>'.get_the_date('d F Y', $idd).'</span>
			
		</li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('latest_post', 'latest_post_shortcode');  


