<?php
/**
 * CPT Portfolio
 */

function pwp_register_portfolio() {
    register_post_type('portfolio', 
        array(
            'labels' => array(
                'name' => 'Todos portfolios', 
                'singular_name' => __( 'Portfolio', 'portfolio' ),
                'add_new' => __( 'Adicionar Novo', 'Portfolio' ),
                'add_new_item' => __( 'Adicionar Novo Portfolio', 'portfolio' ),
                'edit_item' => __( 'Editar portfolio', 'portfolio' ),
                'new_item' => __( 'Novo Portfolio', 'portfolio' ),
                'view_item' => __( 'Ver Portfolio', 'portfolio' ),
                'search_items' => __( 'Pesquisar portfolio', 'portfolio' ),
                'not_found' => __( 'Nenhum Portfolio encontrado', 'portfolio' ),
                'not_found_in_trash' => __( 'Nenhum Portfolio encontrado na lixeira', 'portfolio' ),
                'parent_item_colon' => __( 'Parent portfolio:', 'portfolio' ),
                'menu_name' => __( 'portfolio', 'portfolio' ),
            ),
            'public' => true,
            'menu_position' => 20,
            'supports' => array('title', 'thumbnail'),
            'menu_icon' => 'dashicons-portfolio'
        )
    );
}
add_action('init', 'pwp_register_portfolio');