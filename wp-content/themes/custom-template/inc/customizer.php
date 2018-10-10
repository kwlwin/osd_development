<?php
/**
 * Custom Template Theme Customizer
 *
 * @package Custom_Template
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function custom_template_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'custom_template_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'custom_template_customize_partial_blogdescription',
		) );

		$wp_customize->add_section(
			'custom_template_slider_section',
			array(
				'title'       => __( 'Slider', 'custom_template' ),
				'capability'  => 'edit_theme_options',
			)
		);
		// Slider
		$wp_customize->add_setting( 'custom_template_slider_main_text_title_display', array(
			'default' => 'Lorem Ipsum Dolor Sit amet',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'custom_template_sanitize_text_title_field',
		) );

		$wp_customize->add_control( new WP_Customize_Control($wp_customize,'custom_template_slider_main_text_title_display', array(
		    'type' => 'text',
		    'priority' => 10,
		    'section' => 'custom_template_slider_section',
		    'label' => __( 'Title', 'textdomain' ),
		    // 'description' => __( 'This is a custom textarea.' ),
		)) );


		$wp_customize->add_setting( 'custom_template_slider_main_text_display', array(
			'default' => 'Lorem Ipsum Dolor Sit amet',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'custom_template_sanitize_text_field',
		) );

		$wp_customize->add_control( new WP_Customize_Control($wp_customize,'custom_template_slider_main_text_display', array(
		    'type' => 'textarea',
		    'priority' => 10,
		    'section' => 'custom_template_slider_section',
		    'label' => __( 'About Us', 'textdomain' ),
		    // 'description' => __( 'This is a custom textarea.' ),
		)) );

		for ($i = 1; $i <= 3; ++$i) {
		
			$slideImageId = 'custom_template_slide'.$i.'_image';
			$defaultSliderImagePath = get_template_directory_uri().'/images/slider/'.$i.'.jpg';



			// Add Slide Background Image
			$wp_customize->add_setting( $slideImageId,
				array(
					'default' => $defaultSliderImagePath,
					'sanitize_callback' => 'esc_url_raw'
				)
			);
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $slideImageId,
					array(
						'label'   	 => sprintf( esc_html__( 'Slide #%s Image', 'custom_template' ), $i ),
						'section' 	 => 'custom_template_slider_section',
						'settings'   => $slideImageId,
					)
				)
			);
			

		}
	}
}
add_action( 'customize_register', 'custom_template_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function custom_template_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function custom_template_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function custom_template_customize_preview_js() {
	wp_enqueue_script( 'custom-template-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'custom_template_customize_preview_js' );
