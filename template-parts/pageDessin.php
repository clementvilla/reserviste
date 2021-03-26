<?php
/*
Template Name: pageDessin
*/
?>

<?php
get_header();
?>

    <main id="dessin" class="header-correction">
        <?php the_content() ?>
        <div class="liste">


            <div class="grilleImage">
                <ul>

                    <?php get_template_part('single', 'dessin'); ?>
                </ul>
            </div>

        </div>
    </main>


<?php
get_footer();
?>