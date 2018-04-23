<?php
class Post{
	private $author;
	private $slug;
	private $title;
	private $content;
	private $type;

	function __construct($author=1, $slug, $title, $content, $type='post'){
		$this->author = $author;
		$this->slug = $slug;
		$this->title = $title;
		$this->content = $content;
		$this->type = $type;
	}
            
	static function create($author=1, $slug, $title, $content, $type='post') {
		function existe($author, $slug) {
			$args_posts = array(
				'post_type'      => $author,
				'post_status'    => 'any',
				'name'           => $slug,
				'posts_per_page' => 1,
			);
			$loop_posts = new WP_Query( $args_posts );
			if ( ! $loop_posts->have_posts() ) return false;
			else {
				$loop_posts->the_post();
				return $loop_posts->post->ID;
			}
		}
		if( !existe($author, $slug) ) {
			$post_id = wp_insert_post(
				array(
					'comment_status'	=>	'closed',
					'ping_status'		=>	'closed',
					'post_author'		=>	$author,
					'post_name'		    =>	$slug,
					'post_title'		=>	$title,
					'post_content'      =>  $content,
					'post_status'		=>	'publish',
					'post_type'		    =>	$type
				)
			);
		}
		else $post_id = -2;
	}
                            
	static function delete($slug, $type){
		$post = get_page_by_path( $slug, OBJECT, $type );
		$post = $post->ID;
		wp_delete_post($post, true);
	}

}