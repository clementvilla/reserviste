<?php

get_header();




while (have_posts()) :the_post(); ?>


    <main id="articlType" class="header-correction">

        <h2><?php the_title(); ?></h2>
        <img src=<?php the_field("image-article") ?> >
       <div class="content-article">
           <?php the_content(); ?>
       </div>

        <p class="signature">
            Rédigé par <span><?php the_author(); ?></span>

            le <span class='date'><?php the_date(); ?></span>

			dans <?php the_category(', '); ?>.
        </p>


    </main>

<?php endwhile; ?>


<?php
get_footer();
