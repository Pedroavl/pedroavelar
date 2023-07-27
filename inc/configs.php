<?php

// Ligando o suporte de menus ao tema 
function pwp_register_menu_theme() {
    register_nav_menu('menu-navegacao', 'Menu navegação');
}
add_action('init', 'pwp_register_menu_theme');

// Adicionando suporte a opções  customizadas ao tema
function pwp_add_features_theme() {
    add_theme_support('custom-logo', array(
        'height' => 170,
        'width' => 170,
        'flex-height' => true,
        'flex-width' => true
    ));
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'pwp_add_features_theme');