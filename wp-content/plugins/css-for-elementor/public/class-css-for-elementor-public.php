<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://theinnovs.com/cssfe
 * @since      1.0.0
 *
 * @package    Css_For_Elementor
 * @subpackage Css_For_Elementor/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Css_For_Elementor
 * @subpackage Css_For_Elementor/public
 * @author     theinnovs <theinnovs@gmail.com>
 */
class Css_For_Elementor_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Css_For_Elementor_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Css_For_Elementor_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name . '_cssfe-particalse', plugin_dir_url( __FILE__ ) . 'css/cssfe-particalse.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_cssfe-widget', plugin_dir_url( __FILE__ ) . 'css/cssfe-widget.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_ir-review-widget', plugin_dir_url( __FILE__ ) . 'css/cssfe-ir-review-widget.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_cssfe-bootstrap.min', plugin_dir_url( __FILE__ ) . 'css/cssfe-bootstrap.min.css', array(), $this->version, 'all' );

		wp_enqueue_style( $this->plugin_name . '_owl.carousel.min', plugin_dir_url( __FILE__ ) . 'css/owl-lib/owl.carousel.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_owl.theme.default.min', plugin_dir_url( __FILE__ ) . 'css/owl-lib/owl.theme.default.min.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( $this->plugin_name . '_cssfe-social-tooltip', plugin_dir_url( __FILE__ ) . 'css/cssfe-social-tooltip.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( $this->plugin_name . '_cssfe-popup', plugin_dir_url( __FILE__ ) . 'css/cssfe-pupup.css', array(), $this->version, 'all' );

		wp_enqueue_style( $this->plugin_name . '_public', plugin_dir_url( __FILE__ ) . 'css/css-for-elementor-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Css_For_Elementor_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Css_For_Elementor_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( $this->plugin_name . '_cssfe-canvas-chart.min', plugin_dir_url( __FILE__ ) . 'js/cssfe-canvas-chart.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_extension-pafe-particles', plugin_dir_url( __FILE__ ) . 'js/extension-pafe-particles.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_cssfe-proper', plugin_dir_url( __FILE__ ) . 'js/cssfe-proper.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_cssfe-bootstrap.min', plugin_dir_url( __FILE__ ) . 'js/cssfe-bootstrap.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_cssfe-owl-carousel.min', plugin_dir_url( __FILE__ ) . 'js/owl-lib/owl.carousel.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_cssfe-waypoint.min', plugin_dir_url( __FILE__ ) . 'js/cssfe-waypoint.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_cssfe-countup.min', plugin_dir_url( __FILE__ ) . 'js/cssfe-countup.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_cssfe-countdown.min', plugin_dir_url( __FILE__ ) . 'js/cssfe-countdown.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_cssfe-tippy-tooltip.min', plugin_dir_url( __FILE__ ) . 'js/cssfe-tippy-tooltip.min.js', array( 'jquery' ), $this->version, false );
		
		wp_enqueue_script( $this->plugin_name . '_public', plugin_dir_url( __FILE__ ) . 'js/css-for-elementor-public.js', array( 'jquery' ), $this->version, false );

	}




}


