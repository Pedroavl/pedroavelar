<?php

// Definindo constantes do tema
define('PREFIX', 'pwp_');
define('TEMPLATE', get_template_directory_uri());
define('PWP_THEME_VERSION', '1.0.0');

// Chamando diretórios do tema
require_once(__DIR__ . '/inc/configs.php');
require_once(__DIR__ . '/inc/scripts.php');
require_once(__DIR__ . '/inc/types/pwp-depoimentos.php');
require_once(__DIR__ . '/inc/types/pwp-portfolio.php');
require_once(__DIR__ . '/inc/types/pwp-trajetoria.php');
require_once ( __DIR__ . '/inc/fields/portfolio.php' );
require_once ( __DIR__ . '/inc/fields/trajetoria.php' );


