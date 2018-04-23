<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       Antonio Luis
 * @since      1.0.0
 *
 * @package    Formulario
 * @subpackage Formulario/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Formulario
 * @subpackage Formulario/admin
 * @author     Antonio Luis <antoniolrj4@gmail.com>
 */
class Formulario_Admin {

	
	private $plugin_name;

		
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
	
	public function enqueue_styles() {

		
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/formulario-admin.css', array(), $this->version, 'all' );

	}
	
	public function enqueue_scripts() {


		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/formulario-admin.js', array( 'jquery' ), $this->version, true );

	}
            
            public function create_formulario_post(){
                
                register_post_type( 'formulario_placas',
                    array(
                        'labels' => array(
                            'name' => 'Formulario placas',
                            'singular_name' => 'Movie Review',
                            'add_new' => 'Add New',
                            'add_new_item' => 'Add New Movie Review',
                            'edit' => 'Edit',
                            'edit_item' => 'Edit Movie Review',
                            'new_item' => 'New Movie Review',
                            'view' => 'View',
                            'view_item' => 'View Movie Review',
                            'search_items' => 'Search Movie Reviews',
                            'not_found' => 'No Movie Reviews found',
                            'not_found_in_trash' => 'No Movie Reviews found in Trash',
                            'parent' => 'Parent Movie Review'
                        ),

                        'public' => true,
                        'menu_position' => 15,
                        //'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
                        'taxonomies' => array( '' ),
                        'rewrite' => array('slug' => '/'),
                        'has_archive' => true
                    )
                );
                
                   register_post_type( 'datos_formularios',
                    array(
                        'labels' => array(
                            'name' => 'Datos formularios',
                            'singular_name' => 'Formularios',
                            'add_new' => 'Añadir nuevo',
                            'add_new_item' => 'Añadir nuevo formulario',
                            'edit' => 'Editar',
                            'edit_item' => 'Editar formulario',
                            'new_item' => 'New Movie Review',
                            'view' => 'View',
                            'view_item' => 'View Movie Review',
                            'search_items' => 'Search Movie Reviews',
                            'not_found' => 'No Movie Reviews found',
                            'not_found_in_trash' => 'No Movie Reviews found in Trash',
                            'parent' => 'Parent Movie Review'
                        ),

                        'public' => true,
                        'menu_position' => 15,
                        'supports' => array('title'),
                        'taxonomies' => array( '' ),
                        'rewrite' => array('slug' => '/'),
                        'has_archive' => true                        
                    )
                );                                                                                                                                              
            }
                                    
            function add_metabox(){
                
                  function mifuncion(){
                      
                    
                    require_once plugin_dir_path(__FILE__).'partials/formulario-admin-display.php';
                    //echo plugin_dir_url( __FILE__ ) . 'partials/formulario-admin-display.php';
                    
                    global $post;                    
                    $contenido = get_post($post->ID)->post_content;
                    $json = (array) json_decode($contenido);
                    
                    
                    foreach($json as $name=>$value){
                                                
                        echo "<label for='$name'>$name</label><input type='text' name='$name' id='$name' value='$value'></br>";
                    }
                    
                    
                }
                   
                add_meta_box('999', 'Datos recopilados', 'mifuncion', 'datos_formularios', 'normal', 'high');
            }
            
            

}
