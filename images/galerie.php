<?php
/*
Template Name: pageGalerie
*/
?>

<?php
get_header();
?>

    <main id="galerie">


        <?php the_content() ?>

<!--

        <div class="image">

            <div class="grille">

                <ul>

                    <?php get_template_part('single', 'galerie'); ?>

                </ul>


            </div>



        </div>
        <div style="text-align:center;">
            <?php posts_nav_link( ' &#183; ', 'previous page', 'next page' ); ?>
        </div>
    </main>

-->

<?php
get_footer();
?>