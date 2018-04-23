<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       Antonio Luis
 * @since      1.0.0
 *
 * @package    Formulario
 * @subpackage Formulario/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Formulario
 * @subpackage Formulario/public
 * @author     Antonio Luis <antoniolrj4@gmail.com>
 */
class Formulario_Public {

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
            
            private $pages = [
                'formulario-placas'
            ];

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
		 * defined in Formulario_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Formulario_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
                         
                        foreach ($this->pages as $page) if(is_single($page))
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/formulario-public.css', array(), $this->version, 'all' );


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
		 * defined in Formulario_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Formulario_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
                        foreach ($this->pages as $page) if(is_single($page)){
                            wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/formulario-public.js', array( 'jquery' ), $this->version, false );  
                        }
	}
            
            public function shortcodes(){
		foreach ($this->pages as $page) if(is_single($page))
			require_once plugin_dir_path(__FILE__).'partials/formulario-public-display.php';
	}

}
