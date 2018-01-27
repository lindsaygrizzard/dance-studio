<?php
if ( !class_exists( 'RT_Postmeta' ) ) {
	return;
}

$GymEdge_Postmeta = RT_Postmeta::getInstance();

///////////////////
// Page Settings //
///////////////////
$gym_nav_menus = wp_get_nav_menus( array( 'fields' => 'id=>name' ) );
$gym_nav_menus = array( 'default' => __( 'Default', 'gymedge-core' ) ) + $gym_nav_menus;


//////////////
// Trainers //
//////////////
$gym_trainer_socials = array(
	'facebook' => array(
		'label' => __( 'Facebook', 'gymedge-core' ),
		'type'  => 'text',
		'icon'  => 'fa-facebook',
		),
	'twitter' => array(
		'label' => __( 'Twitter', 'gymedge-core' ),
		'type'  => 'text',
		'icon'  => 'fa-twitter',
		),
	'linkedin' => array(
		'label' => __( 'Linkedin', 'gymedge-core' ),
		'type'  => 'text',
		'icon'  => 'fa-linkedin',
		),
	'youtube' => array(
		'label' => __( 'Youtube', 'gymedge-core' ),
		'type'  => 'text',
		'icon'  => 'fa-youtube-play',
		),
	'pinterest' => array(
		'label' => __( 'Pinterest', 'gymedge-core' ),
		'type'  => 'text',
		'icon'  => 'fa-pinterest-p',
		),
	'instagram' => array(
		'label' => __( 'Instagram', 'gymedge-core' ),
		'type'  => 'text',
		'icon'  => 'fa-instagram',
		),
	'github' => array(
		'label' => __( 'Github', 'gymedge-core' ),
		'type'  => 'text',
		'icon'  => 'fa-github',
		),
	);

$gym_trainer_socials = apply_filters( 'trainer_socials', $gym_trainer_socials );

GymEdge::$trainer_social_fields = $gym_trainer_socials;

$GymEdge_Postmeta->add_meta_box( 'trainer_info', __( 'Trainer Info', 'gymedge-core' ), array( 'gym_trainer' ), '', '', 'high', array(
	'fields' => array(
		'gym_trainer_designation' => array(
			'label' => __( 'Types of classes taught ', 'gymedge-core' ),
			'type'  => 'text',
			'desc'  => __( '(comma seperated)', 'gymedge-core' ),
			),
		)
	) );

$GymEdge_Postmeta->add_meta_box( 'trainer_socials', __( 'Trainer Socials', 'gymedge-core' ), array( 'gym_trainer' ), '', '', 'high', array(
	'fields' => array(
		'gym_trainer_socials_header' => array(
			'label' => __( 'Socials', 'gymedge-core' ),
			'type'  => 'header',
			'desc'  => __( 'Put your social links here (will only appear on website if field is filled in)', 'gymedge-core' ),
			),
		'gym_trainer_socials' => array(
			'type'  => 'group',
			'value'  => $gym_trainer_socials
			),
		)
	) );

///////////
// Class //
///////////
$time_picker_format = ( GymEdge::$options['class_time_format'] == 24 ) ? 'time_picker_24' : 'time_picker';
$GymEdge_Postmeta->add_meta_box( 'class_schedule', __( 'Schedule', 'gymedge-core' ), array( 'gym_class' ), '', '', 'high', array(
	'fields' => array(
		'gym_class_button_text' => array(
			'label' => __( 'Button Text', 'gymedge-core' ),
			'type'  => 'text',
			'desc'  => __( 'Enter button text eg. Join Now!', 'gymedge-core' ),
			),
		'gym_class_button_url' => array(
			'label' => __( 'Button URL', 'gymedge-core' ),
			'type'  => 'text',
			'desc'  => __( 'Enter button url', 'gymedge-core' ),
			),
		'gym_class_schedule' => array(
			'type'  => 'repeater',
			'button' => __( 'Add New Schedule', 'gymedge-core' ),
			'value'  => array(
				'trainer' => array(
					'label' => __( 'Trainer', 'gymedge-core' ),
					'type'  => 'select',
					'options' => GymEdge_Helper::get_trainers(),
					'default'  => 'default',
					),
				'week' => array(
					'label' => __( 'Weekday', 'gymedge-core' ),
					'type'  => 'select',
					'options' => array(
						'none' => __( 'Select a Weekday', 'gymedge-core' ),
						'mon'  => __( 'Monday', 'gymedge-core' ),
						'tue'  => __( 'Tuesday', 'gymedge-core' ),
						'wed'  => __( 'Wednesday', 'gymedge-core' ),
						'thu'  => __( 'Thursday', 'gymedge-core' ),
						'fri'  => __( 'Friday', 'gymedge-core' ),
						'sat'  => __( 'Saturday', 'gymedge-core' ),
						'sun'  => __( 'Sunday', 'gymedge-core' ),
						),
					),				
				)
			),
		)
	) );

//////////////////
// Testimonials //
//////////////////
$GymEdge_Postmeta->add_meta_box( 'testimonial_info', __( 'Testimonial Info', 'gymedge-core' ), array( 'gym_testimonial' ), '', '', 'high', array(
	'fields' => array(
		'gym_tes_designation' => array(
			'label' => __( 'Designation', 'gymedge-core' ),
			'type'  => 'text',
			),
		)
	) );