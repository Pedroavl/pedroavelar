<?php
/**
 * CPT Trajetória
 */

function pwp_register_trajetoria() {
    register_post_type('trajetoria', 
        array(
            'labels' => array(
                'name' => 'Todos trajetorias', 
                'singular_name' => __( 'trajetoria', 'trajetoria' ),
                'add_new' => __( 'Adicionar Novo', 'trajetoria' ),
                'add_new_item' => __( 'Adicionar Novo trajetoria', 'trajetoria' ),
                'edit_item' => __( 'Editar trajetoria', 'trajetoria' ),
                'new_item' => __( 'Novo trajetoria', 'trajetoria' ),
                'view_item' => __( 'Ver trajetoria', 'trajetoria' ),
                'search_items' => __( 'Pesquisar trajetoria', 'trajetoria' ),
                'not_found' => __( 'Nenhuma trajetoria encontrada', 'trajetoria' ),
                'not_found_in_trash' => __( 'Nenhum trajetoria encontrado na lixeira', 'trajetoria' ),
                'parent_item_colon' => __( 'Parent trajetoria:', 'trajetoria' ),
                'menu_name' => __( 'trajetoria', 'trajetoria' ),
            ),
            'public' => true,
            'menu_position' => 20,
            'supports' => array('title'),
            'menu_icon' => 'dashicons-building'
        )
    );
}
add_action('init', 'pwp_register_trajetoria');