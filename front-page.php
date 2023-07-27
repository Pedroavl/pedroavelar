<?php 
get_header();
?>

<main id="pwp-main">
<section class="container-fluid pwp-site-header">
    <div class="row align-items-center">
            <div class="col-sm-6 pwp-site-header__image">
                <img src="<?php echo TEMPLATE . '/assets/images/header-avatar.png';?>" alt="Homem jovem, cor da pele parda, sorrindo corpo de lado na foto está aparecendo apenas o busto mão está no queixo, cabelo curto, óculos preto, está vestindo camisa preta e usa uma pulseira inteligente preta." width="606" height="642">
            </div>

            <div class="col-sm-6">
                <h1 class="pwp-site-header__title">I<span class="pwp-emphasys">'</span>m Pedro Avelar<br/>Frontend developer</h1>
                <p class="pwp-site-header__desc">Olá Pedro aqui! Aspirante a tecnologias web, entusiasta de desafios, desenhista por hobbie,
muito fã da saga Guerra nas Estrelas, clique no botão para saber mais...</p>
                <a class="pwp-site-header__btn-cta" href="<?php echo bloginfo('url') . '/#sobre'; ?>">Saiba mais</a>
            </div>
    </div>
</section><!-- end .pwp-site-header-->

<section id="sobre" class="container-fluid pwp-about">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="pwp-about__title pwp-upper-title">sobre <span class="pwp-emphasys">mim</span></h2>
            <p class="pwp-about__description pt-4 pb-5">Olá Pedro aqui! Amante de tecnologias web, entusiasta de desafios, desenhista por hobbie,
muito fã da saga Guerra nas Estrelas, e ouvinte de um bom rock. 
<br/><br/>
Nas horas vagas, tenho como hobbie pessoal, desenhar além de gostar bastante de estudar.
Estou atualmente cursando Sistemas de Informação curso que por sinal é muito a minha  cara.
<br/><br/>
Qualidade e tempo de entrega ágil sempre me acompanharam durante a minha vida, e na minha trajetória profissional não foi diferente, clientes felizes é o meu maior prazer!
</p>
<a class="pwp-about__cta-btn" href="/#contato">Entre em contato</a>
        </div>
        <div class="col-sm-6 pwp-about__image">
        <img class="img-fluid" width="602" height="715" src="<?php echo TEMPLATE . '/assets/images/avatar-sobre.png'; ?>" alt="Homem que usa óculos preto quadrado estilo social usando camisa polo preta com detalhes brancos cabelo curto penteado de topete social e está com os braços cruzados cor da pele parda">
        </div>
    </div>
</section><!-- end .pwp-about-->



<?php 
    $args = array(
        'post_type' => 'testimonials'
    );

    $query = new WP_Query($args);

    echo '<section id="depoimentos" class="container-fluid pwp-testmonials">';
        echo '<h2 class="pwp-testmonials__title pwp-upper-title text-center">O que falam de mim?</h2>';
                echo '<div class="row pwp-testimonials-slider">';
                    if($query->have_posts()) :
                            while($query->have_posts()) : $query->the_post();
                                echo '<div class="col">';
                                echo '<img class="d-flex m-auto" src=" ' .TEMPLATE . '/assets/images/avatar-depoimentos.png' . ' " width="150" height="150" alt="logo avatar Pedro Avelar símbolo"/>';
                                        the_title('<h3 class="pwp-testmonials-slider__name text-center">','</h3>');
                                        the_content();
                                echo '</div>';
                            endwhile;    
                    else :
                            echo '<h3 class="text-center pwp-testmonials-slider__notice">Nenhum depoimento cadastrado ainda!</h3>';
                    endif;
                echo '</div>';
    echo '</section> <!-- end .pwp-testmonials -->';
?>

<?php 
    $args = array(
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'orderby'=>'modified',
        'order'=>'ASC'
    );

    $query = new WP_Query($args);

    echo '<section id="portfolio" class="container-fluid pwp-portfolio">';
        echo '<h2 class="pwp-portfolio__title pwp-upper-title text-center">Projetos realizados</h2>';
            echo '<div class="row pwp-portfolio__inner align-items-start">';
                if($query->have_posts()) :
                    while($query->have_posts()) : $query->the_post();
                        echo '<div class="col-md-4">';
                            $postID = get_the_ID();
                            $link = get_post_meta($postID, '_link_portfolio', true);
                            echo '<a href="'.$link .'"'. 'target="_blank">';
                                echo '<div id="pwp-'.$postID.'"'.'class="pwp-portfolio__image">';
                                    the_post_thumbnail();
                                echo'</div>';
                                echo '<div class="pwp-portfolio__overlay">';
                                    echo '<div class="pwp-portfolio__text">';
                                        the_title();
                                    echo '</div>';
                                echo '</div>';
                            echo '</a>';
                        echo '</div>';
                    endwhile;
                else :
                    echo '<h3 class="text-center pwp-portfolio__notice">Nenhum conteúdo cadastrado!</h3>';
                endif;
            echo '</div>';
    echo '</section> <!-- pwp-portfolio -->';
?>

<?php 

$a = array (
    'post_type'=>'trajetoria',
    'orderby'=>'publish',
    'posts_per_page' => -1,
    'order'=>'ASC'
);

$query = new WP_Query($a);

// var_dump($query->found_posts);

echo '<section id="trajetoria" class="container-fluid pwp-trajetoria">';
    echo '<div class="row">';
        echo '<div class="col-lg-6">';
            if($query->have_posts()) :
                echo '<h2 class="pwp-trajetoria__title  pwp-upper-title">Minha <br/><span class="pwp-emphasys">trajetória</span></h2>';
                    echo '<div class="loading-bar__wrapper">';
                        echo '<div class="loading-bar">';
                while ($query->have_posts()) : $query->the_post();
                    $post_ID = get_the_ID();
                    $data_trajectory = get_post_meta($post_ID, '_data_trajetoria', true);

                    echo '<div class="labels">';
                        echo '<div>';
                            echo '<h3 class="pwp-trajetoria-labels__title">'.get_the_title().'</h3>';
                            echo '<p class="pwp-trajetoria__label">'.'-'.$data_trajectory.'</p>';
                        echo '</div>';
                    echo '</div>';
                    
                endwhile;
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

                    echo '<div class="col-lg-4">';
                        echo '<div class="pwp-trajetoria__image">';
                            echo '<img src="'.TEMPLATE . '/assets/images/avatar-trajetoria.png'.'" width="478" height="773" alt="Homem jovem, sorrindo, canbelos pretos corte médio social usando camisa preta e óculos pretos">';
                        echo '</div>';
                    echo '</div>';
            else: 
                echo '<p style="text-align: center; color: #fff;">Nenhuma trajetória cadastrada!</p>';
            endif;
echo '</section> <!-- pwp-trajetoria -->';
?>

<section id="contato" class="container-fluid pwp-contato">
            <h2 class="pwp-contato__title text-center pwp-upper-title">Entre em contato</h2>
            <div class="pwp-contato__forms-wrap">
                <?php echo do_shortcode('[contact-form-7 id="43" title="Contato"]'); ?>
            </div>
</section>


<?php
get_footer();
