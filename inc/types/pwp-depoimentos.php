<?php
/**
 * CPT Depoimentos
 */

function pwp_register_testimonials() {
    register_post_type('testimonials', 
        array(
            'labels' => array(
                'name' => 'Todos Depoimentos', 
                'singular_name' => __( 'Depoimento', 'testimonials' ),
                'add_new' => __( 'Adicionar Novo', 'Depoimento' ),
                'add_new_item' => __( 'Adicionar Novo Depoimento', 'testimonials' ),
                'edit_item' => __( 'Editar Depoimentos', 'testimonials' ),
                'new_item' => __( 'Novo Depoimento', 'testimonials' ),
                'view_item' => __( 'Ver Depoimento', 'testimonials' ),
                'search_items' => __( 'Pesquisar Depoimentos', 'testimonials' ),
                'not_found' => __( 'Nenhum depoimento encontrado', 'testimonials' ),
                'not_found_in_trash' => __( 'Nenhum depoimento encontrado na lixeira', 'testimonials' ),
                'parent_item_colon' => __( 'Parent Depoimentos:', 'testimonials' ),
                'menu_name' => __( 'Depoimentos', 'testimonials' ),
            ),
            'public' => true,
            'menu_position' => 20,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-testimonial'
        )
    );
}
add_action('init', 'pwp_register_testimonials');

// Registrando Taxonomia ao custom post type $testimonials
function pwp_register_taxonomy_testimonials()  {
    register_taxonomy('Depoimentos', 'testimonials', 
        array(
            'labels' => array('name' => 'Adicionar Cat. Depoimentos'),
            'hierarchical' => true
        )
    );
}
add_action('init', 'pwp_register_taxonomy_testimonials');