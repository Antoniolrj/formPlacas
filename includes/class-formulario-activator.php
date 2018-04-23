<?php

/**
 * Fired during plugin activation
 *
 * @link       Antonio Luis
 * @since      1.0.0
 *
 * @package    Formulario
 * @subpackage Formulario/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Formulario
 * @subpackage Formulario/includes
 * @author     Antonio Luis <antoniolrj4@gmail.com>
 */


class Formulario_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
                        require_once plugin_dir_path(__FILE__).'posts.php';
                        require_once plugin_dir_path(__FILE__).'class-post-formulario.php';
                        $posts = posts();
                        foreach ($posts as $post) Post::create($post['author'], $post['slug'], $post['title'], $post['content'], $post['type']);

	}

}
