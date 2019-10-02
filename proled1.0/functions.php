<?php

include 'includes/html.php';

// Menu Estilizado
register_nav_menus( array (
	'Menu' => 'Menu principal do site',
) );

add_action('init', 'create_posttype' );

add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support("post-thumbnails");

// Tamanhos das Imagens
add_image_size( 'thumbposts', 425, 270, true );

if ( current_user_can('contributor') && !current_user_can('upload_files') )
   add_action('admin_init', 'allow_contributor_uploads');
     function allow_contributor_uploads()      {
        $contributor = get_role('contributor');
        $contributor->add_cap('upload_files');
    }

// Função para criar Post Types
function create_posttype() {

	register_post_type( 'eventos',
		array(
			'labels' => array(
				'name' => __( 'Eventos' ),
				'singular_name' => __( 'Evento' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'eventos'),
		)
	);

	register_post_type( 'parceiros',
		array(
			'labels' => array(
				'name' => __( 'Parceiros' ),
				'singular_name' => __( 'Parceiro' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'parceiros'),
		)
	);
}

function get_page_by_slug( $slug_page ){
	$page = get_page_by_path( $slug_page );
	return (object)["title"=>$page->post_title, "content"=>$page->post_content];
}

function get_recents_posts(){
	$args = array(
		'posts_per_page'   => 4,
		'offset'           => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'post',
		'post_status'      => 'publish'
	);
	return get_posts( $args );
}

function get_recents_events(){
	$args = array(
		'posts_per_page'   => 4,
		'offset'           => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'eventos',
		'post_status'      => 'publish'
	);
	return get_posts( $args );
}