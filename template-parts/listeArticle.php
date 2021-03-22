<?php
/*
Template Name: listeArticle
*/
?>

<?php
get_header();
?>

    <main id="event">

        <?php the_content() ?>


        <div class="liste">

            <div class="grille">
                <ul>
                    <?php get_template_part('single', 'liste'); ?>
                </ul>
            </div>



    </main>


<?php
get_footer();
?>