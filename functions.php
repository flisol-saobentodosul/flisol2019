<?php
/* WIDGETS */

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}
/*-----------------------------------------------------------------------------------*/
/* DEFININDO TAMANHO PARA THE_EXCERPT()
/*-----------------------------------------------------------------------------------*/
add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
return 30; //Nova quantidade de caracteres do excerpt
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more( $more ) {
  return ' ...';
}

/*-----------------------------------------------------------------------------------*/
/* DEFININDO TAMANHO PARA THE_CONTENT()
/*-----------------------------------------------------------------------------------*/
function my_string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words).'... ';
}
/*-----------------------------------------------------------------------------------*/
/* ADICIONANDO SUPORTE A THUMBNAILS AO TEMA
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails', array('palestrante', 'quando-começa', 'patrocinador', 'programacao', 'atividades'));


/*
* Creating a function to create our CPT
*/

function custom_post_type() {
//Quando começa?
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Quando começa?', 'Post Type General Name'),
		'singular_name'       => _x( 'Quando começa?', 'Post Type Singular Name'),
		'menu_name'           => __( 'Quando começa?'),
		'parent_item_colon'   => __( 'Quando começa? Pai'),
		'all_items'           => __( 'Todos os Quando começa?'),
		'view_item'           => __( 'Visualizar Quando começa?'),
		'add_new_item'        => __( 'Adicionar novo Quando começa?'),
		'add_new'             => __( 'Adicionar novo'),
		'edit_item'           => __( 'Editar Quando começa?'),
		'update_item'         => __( 'Atualizar Quando começa?'),
		'search_items'        => __( 'Procurar Quando começa?'),
		'not_found'           => __( 'Não encontrado'),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira'),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Quando começa?'),
		'description'         => __( 'Quando começa?'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'thumbnail', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'quando-começa', $args );
//PALESTRANTE	
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Palestrantes', 'Post Type General Name'),
		'singular_name'       => _x( 'Palestrante', 'Post Type Singular Name'),
		'menu_name'           => __( 'Palestrantes'),
		'parent_item_colon'   => __( 'Palestrante Pai'),
		'all_items'           => __( 'Todos os palestrantes'),
		'view_item'           => __( 'Visualizar palestrante'),
		'add_new_item'        => __( 'Adicionar novo palestrante'),
		'add_new'             => __( 'Adicionar novo'),
		'edit_item'           => __( 'Editar palestrante'),
		'update_item'         => __( 'Atualizar palestrante'),
		'search_items'        => __( 'Procurar palestrante'),
		'not_found'           => __( 'Não encontrado'),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira'),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'palestrante'),
		'description'         => __( 'Palestrantes'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'thumbnail', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'palestrante', $args );
//PATROCINADORES

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Patrocinadores', 'Post Type General Name'),
		'singular_name'       => _x( 'Patrocinador', 'Post Type Singular Name'),
		'menu_name'           => __( 'Patrocinadores'),
		'parent_item_colon'   => __( 'Patrocinadores Pai'),
		'all_items'           => __( 'Todos os Patrocinadores'),
		'view_item'           => __( 'Visualizar Patrocinador'),
		'add_new_item'        => __( 'Adicionar novo Patrocinador'),
		'add_new'             => __( 'Adicionar novo'),
		'edit_item'           => __( 'Editar Patrocinador'),
		'update_item'         => __( 'Atualizar Patrocinador'),
		'search_items'        => __( 'Procurar Patrocinador'),
		'not_found'           => __( 'Não encontrado'),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira'),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Patrocinador'),
		'description'         => __( 'Patrocinadores'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'thumbnail', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'patrocinador', $args );
//PROGRMAÇÃO
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Programações', 'Post Type General Name'),
		'singular_name'       => _x( 'Programação', 'Post Type Singular Name'),
		'menu_name'           => __( 'Programações'),
		'parent_item_colon'   => __( 'Programação Pai'),
		'all_items'           => __( 'Todos os programações'),
		'view_item'           => __( 'Visualizar programação'),
		'add_new_item'        => __( 'Adicionar novo programação'),
		'add_new'             => __( 'Adicionar novo'),
		'edit_item'           => __( 'Editar programação'),
		'update_item'         => __( 'Atualizar programação'),
		'search_items'        => __( 'Procurar programação'),
		'not_found'           => __( 'Não encontrado'),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira'),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Programação'),
		'description'         => __( 'Programações'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'thumbnail', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'programacao', $args );
	
	register_post_type( 'patrocinador', $args );
//Ativididades Complementares
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Atividades', 'Post Type General Name'),
		'singular_name'       => _x( 'Atividade', 'Post Type Singular Name'),
		'menu_name'           => __( 'Atividades'),
		'parent_item_colon'   => __( 'Atividade Pai'),
		'all_items'           => __( 'Todos os atividades'),
		'view_item'           => __( 'Visualizar atividade'),
		'add_new_item'        => __( 'Adicionar nova atividade'),
		'add_new'             => __( 'Adicionar nova'),
		'edit_item'           => __( 'Editar atividade'),
		'update_item'         => __( 'Atualizar atividade'),
		'search_items'        => __( 'Procurar atividade'),
		'not_found'           => __( 'Não encontrado'),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira'),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Atividades'),
		'description'         => __( 'Atividades'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'thumbnail', 'custom-fields', 'editor'),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'atividades', $args );
	
	


}
add_action( 'init', 'custom_post_type', 0 );



?>