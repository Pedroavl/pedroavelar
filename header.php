<!DOCTYPE html>
<!--
██████╗ ███████  ██████╗   ██████╗           ██████╗
██╔══██╗██╔════╝██╔══██╗██╔══██╗ ██╔═══  ██╗
██████╔╝█████╗      ██║     ██║██████╔╝ ██║           ██║   
██╔═══╝   ██╔══╝      ██║     ██║██╔══██╗ ██║           ██║
██║             ███████╗██████╔╝ ██║         ██║╚██████╔╝
╚═╝             ╚══════╝╚═════╝    ╚═╝         ╚═╝ ╚═════╝        
-->
<html lang="<?php bloginfo('language') ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Poppins&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-197595184-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-197595184-1');
    </script>
</head>

<body <?php body_class(); ?>>
    <header id="pwp-header" class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light  pwp-navbar">
            <?php the_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="navbar-toggler-icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
                        <path d="M244 4471 c-94 -23 -177 -91 -217 -180 -32 -68 -31 -189 2 -255 32
                    -65 90 -122 154 -152 l52 -24 2325 0 2325 0 52 24 c64 30 122 87 154 152 33
                    66 34 187 2 255 -30 66 -86 124 -151 156 l-57 28 -2305 2 c-1268 0 -2319 -2
                    -2336 -6z" />
                        <path d="M230 2861 c-84 -26 -160 -90 -201 -171 -19 -37 -23 -61 -23 -130 0
                    -72 4 -92 26 -135 31 -60 86 -114 148 -146 l45 -24 2335 0 2335 0 50 27 c111
                    59 170 155 170 278 0 123 -59 219 -170 278 l-50 27 -2320 2 c-1276 1 -2331 -2
                    -2345 -6z" />
                        <path d="M169 1227 c-232 -120 -221 -439 20 -559 l46 -23 2325 0 2325 0 57 28
                    c65 32 121 90 151 156 32 68 31 189 -2 255 -32 65 -90 122 -154 152 l-52 24
                    -2327 0 -2326 0 -63 -33z" />
                    </g>
                </svg>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'menu-navegacao',
                        'menu_id' => 'menu-principal',
                        'menu_class' => 'navbar-nav',
                    )
                );
                ?>
            </div>
        </nav>
    </header>