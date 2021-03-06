<?php
/*
Template Name: listeArticle

Allan
*/
?>

<?php
get_header();
?>

    <main id="event" class="header-correction">

        <div  class="baniere" style=background-image:url(<?php echo get_bloginfo('template_directory')?>/images/fond-engager.jpg);>
            <section class="slogan">
                <h1>ARTICLES</h1>
                <img alt="logo header" src=<?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-titre.png>
            </section>
        </div>

        <div class="bodyPadding">

        <?php the_content() ?>


        <div class="liste">

            <div class="grille">
                <ul>
                    <?php get_template_part('single', 'liste'); ?>
                </ul>
            </div>
        </div>


    </main>


<?php
get_footer();
?>