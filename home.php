<?php
/*
Template Name: Home
*/
?>

<?php
get_header();
?>

<div  class="accueil" style=background-image:url("<?php echo get_bloginfo('template_directory')?>/images/fond-accueil.png");>
    <section class="slogan">
        <h1>ASSOCIATION DES RÉSERVISTES</h1>
        <h3>DU PAYS DE MONTBÉLIARD</h3>
        <img src="<?php echo get_bloginfo('template_directory')?>/images/logo-daccueil.png"  alt="logo du site"/>
        <p>S'engager pour la nation, dans chacune de nos vies</p>
    </section>
</div>

<main id="test">

        <?php the_content() ?>

</main>


<!-- ARTICLES -->

<div class="wp-block-columns articles-preview">
    <?php
       // the query
       $the_query = new WP_Query( array(
          'posts_per_page' => 3,
       ));
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="wp-block-column article-preview-item">

            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_excerpt(); ?>

            <div class="wp-block-buttons article-preview-link">
                <div class="wp-block-button is-style-outline">
                    <a class="wp-block-button__link" href="<?= the_permalink();?>">Lire la suite</a>
                </div>
            </div>

        </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php __('Pas d\'articles'); ?></p>
    <?php endif; ?>
</div>

<!--Carousel -->

<h1 style="margin-left: 5%; margin-top: 10%;">L'association en images</h1>

<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>



<?php
get_footer();
?>
