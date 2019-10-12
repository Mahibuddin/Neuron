<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options For Work Section        -
// -----------------------------------------

$options[]    = array(
  'id'        => 'neuron_works_meta',
  'title'     => __('Works Options','neuron'),
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

	  array(
		  'name'   => 'section_work_meta',
		  'fields' => array(


		array(
		  'id'            => 'sub_title',
		  'type'          => 'text',
		  'title'         => __('Sub Title','neuron'),
		  'desc' 	  => 'Type work sub title/category',
		),
		array(
		  'id'            => 'single_page_img',
		  'type'          => 'image',
		  'title'         => __('Single Page Image','neuron'),
		  'desc' 	  => 'Single Page Big Image',
		),
		array(
		  'id'            => 'link_text',
		  'type'          => 'text',
		  'title'         => __('Link Text','neuron'),
		  'default' 	  => 'Visit Website',
		),
		array(
		  'id'            => 'link',
		  'type'          => 'text',
		  'title'         => __('Link','neuron'),
		),

		//Work Clients Information Groups
		array(
			'id'              => 'client_informations',
			'type'            => 'group',
			'title'           => 'Work Informations',
			'button_title'    => 'Add New',
			'accordion_title' => 'Add New Information',
			'fields'          => array(
				array(
					'id'    => 'title',
					'type'  => 'text',
					'title' => 'Information Title',
				),
				array(
					'id'    => 'value',
					'type'  => 'text',
					'title' => 'Information Value',
				),					
			),
		),
     ),

    ),

  ),
);



CSFramework_Metabox::instance( $options );