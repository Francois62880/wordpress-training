<?php
/**
 * meditation-and-yoga: Customizer
 *
 * @package WordPress
 * @subpackage meditation-and-yoga
 * @since 1.0
 */

function meditation_and_yoga_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'meditation_and_yoga_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'meditation-and-yoga' ),
	    'description' => __( 'Description of what this panel does.', 'meditation-and-yoga' ),
	) );

	$wp_customize->add_section( 'meditation_and_yoga_theme_options_section', array(
    	'title'      => __( 'General Settings', 'meditation-and-yoga' ),
		'priority'   => 30,
		'panel' => 'meditation_and_yoga_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('meditation_and_yoga_theme_options',array(
        'default' => __('Right Sidebar','meditation-and-yoga'),
        'sanitize_callback' => 'meditation_and_yoga_sanitize_choices'	        
	));

	$wp_customize->add_control('meditation_and_yoga_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','meditation-and-yoga'),
        'section' => 'meditation_and_yoga_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','meditation-and-yoga'),
            'Right Sidebar' => __('Right Sidebar','meditation-and-yoga'),
            'One Column' => __('One Column','meditation-and-yoga'),
            'Three Columns' => __('Three Columns','meditation-and-yoga'),
            'Four Columns' => __('Four Columns','meditation-and-yoga'),
            'Grid Layout' => __('Grid Layout','meditation-and-yoga')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'meditation_and_yoga_contact_details', array(
    	'title'      => __( 'Top Bar', 'meditation-and-yoga' ),
		'priority'   => null,
		'panel' => 'meditation_and_yoga_panel_id'
	) );

	$wp_customize->add_setting('meditation_and_yoga_mail1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('meditation_and_yoga_mail1',array(
		'label'	=> __('Email Address','meditation-and-yoga'),
		'section'=> 'meditation_and_yoga_contact_details',
		'setting'=> 'meditation_and_yoga_mail1',
		'type'=> 'text'
	));		
	
	$wp_customize->add_setting('meditation_and_yoga_call1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('meditation_and_yoga_call1',array(
		'label'	=> __('Phone Number','meditation-and-yoga'),
		'section'=> 'meditation_and_yoga_contact_details',
		'setting'=> 'meditation_and_yoga_call1',
		'type'=> 'text'
	));
	
	//home page slider
	$wp_customize->add_section( 'meditation_and_yoga_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'meditation-and-yoga' ),
		'priority'   => null,
		'panel' => 'meditation_and_yoga_panel_id'
	) );

	$wp_customize->add_setting('meditation_and_yoga_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('meditation_and_yoga_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','meditation-and-yoga'),
	   	'description' => __('Image Size ( 1600px x 582px )','meditation-and-yoga'),
	   	'section' => 'meditation_and_yoga_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'meditation_and_yoga_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'meditation_and_yoga_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'meditation_and_yoga_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'meditation-and-yoga' ),
			'section'  => 'meditation_and_yoga_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//	Our Topics
	$wp_customize->add_section('meditation_and_yoga_service',array(
		'title'	=> __('Our Topics','meditation-and-yoga'),
		'description'=> __('This section will appear below the slider.','meditation-and-yoga'),
		'panel' => 'meditation_and_yoga_panel_id',
	));
	
	$wp_customize->add_setting('meditation_and_yoga_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('meditation_and_yoga_title',array(
		'label'	=> __('Section Title','meditation-and-yoga'),
		'section'	=> 'meditation_and_yoga_service',
		'setting'	=> 'meditation_and_yoga_title',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('meditation_and_yoga_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('meditation_and_yoga_cat',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','meditation-and-yoga'),
		'section' => 'meditation_and_yoga_service',
	));

	//Footer
    $wp_customize->add_section( 'meditation_and_yoga_footer', array(
    	'title'      => __( 'Footer Text', 'meditation-and-yoga' ),
		'priority'   => null,
		'panel' => 'meditation_and_yoga_panel_id'
	) );

    $wp_customize->add_setting('meditation_and_yoga_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('meditation_and_yoga_footer_copy',array(
		'label'	=> __('Footer Text','meditation-and-yoga'),
		'section'	=> 'meditation_and_yoga_footer',
		'setting'	=> 'meditation_and_yoga_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'meditation_and_yoga_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'meditation_and_yoga_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'meditation_and_yoga_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'meditation_and_yoga_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'meditation-and-yoga' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'meditation-and-yoga' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'meditation_and_yoga_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'meditation_and_yoga_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'meditation_and_yoga_customize_register' );

function meditation_and_yoga_customize_partial_blogname() {
	bloginfo( 'name' );
}

function meditation_and_yoga_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function meditation_and_yoga_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function meditation_and_yoga_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Meditation_And_Yoga_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Meditation_And_Yoga_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Meditation_And_Yoga_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Meditation Pro Theme', 'meditation-and-yoga' ),
					'pro_text' => esc_html__( 'Go Pro','meditation-and-yoga' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/meditation-yoga-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'meditation-and-yoga-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'meditation-and-yoga-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Meditation_And_Yoga_Customize::get_instance();