<?php get_header(); ?>

    <div id="bg-hero-video">
        <video muted id="hero-video" class="bloc-video" autoplay playsinline loop muted>
            <source src="<?php bloginfo('template_url'); ?>/img/video/video.mp4" type="video/mp4" />
        </video>
        <div>
            <img src="<?php bloginfo('template_url'); ?>/img/logo-proled-marca-dagua.png">
            <a class="botao orcamento">Anuncie aqui</a>
        </div>
    </div>

    <div id="sobre-nos" class="section">
        <h2 class="section-title"><?php echo get_page_by_slug('sobre-nos')->title; ?></h2>
        <?php echo get_page_by_slug('sobre-nos')->content; ?>
    </div>
    <div id="caracteristicas" class="card-group">
        <div class="cards">

        <?php
        $pgname = get_page_by_title('Sobre nós');
        $args = array(
            'post_parent' => $pgname->ID,
            'post_type' => 'page',
            'order' => 'ASC',
            'orderby' => 'title'
        );
        $child_query = new WP_Query( $args );
        ?>
            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
            <div class="card-item">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('page-thumb');
                }
                ?>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php
        wp_reset_postdata();
        ?>
    </div>

    <div id="anuncie">
        <div>
            <h3>Anuncie aqui</h3>
            <p>Solicite a visita de nosso representante</p>
            <a href="#" class="botao orcamento">Contato</a>
        </div>
    </div>

    <div id="nosso-servico" class="section">
        <h2 class="section-title"><?php echo get_page_by_slug('nosso-servico')->title; ?></h2>
        <?php
        $pgname = get_page_by_title('Nosso serviço');
        $args = array(
            'post_parent' => $pgname->ID,
            'post_type' => 'page',
            'order' => 'ASC',
            'orderby' => 'title'
        );
        $child_query = new WP_Query( $args );
        ?>
        <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
        <div class="section-inner-half">
            <h4><?php the_title(); ?></h4>
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <a class="botao orcamento large">Solicite um orçamento</a>
    </div>
    <?php
    wp_reset_postdata();
    ?>

    <div id="onde-estamos" class="section-full">
        <h2 class="section-title">Onde estamos</h2>
    </div>

    <div id="login" class="section">
    <?php
        $pgname = get_page_by_title('Login');
        $args = array(
            'post_parent' => $pgname->ID,
            'post_type' => 'page',
            'order' => 'ASC',
            'orderby' => 'title'
        );
        $child_query = new WP_Query( $args );
        ?>
        <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
        <div class="section-inner-half">
            <h2 class="section-title"><?php the_title(); ?></h4>
            <?php the_content(); ?>
            <a class="botao login large" title="Fazer login no ambiente do síndico">Login</a>
        </div>
        <?php endwhile; ?>
    </div>
    <?php
    wp_reset_postdata();
    ?>

<?php get_footer(); ?>