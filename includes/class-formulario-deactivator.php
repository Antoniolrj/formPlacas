<?php

/**
 * Fired during plugin deactivation
 *
 * @link       Antonio Luis
 * @since      1.0.0
 *
 * @package    Formulario
 * @subpackage Formulario/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Formulario
 * @subpackage Formulario/includes
 * @author     Antonio Luis <antoniolrj4@gmail.com>
 */
class Formulario_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
                
                        require_once plugin_dir_path(__FILE__).'posts.php';
		require_once plugin_dir_path(__FILE__).'class-post-formulario.php';
		$posts = posts();
		foreach ($posts as $post) Post::delete($post['slug'], $post['type']);

	}

}
