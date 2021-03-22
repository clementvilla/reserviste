<?php

get_header();

$args = array(
    'post_type' => 'post'
);
query_posts($args);

if (have_posts()) :


    while (have_posts()) :the_post(); ?>

        <li>
            <a style="cursor: pointer" href="<?php the_permalink() ?>" >
				
				<?php $image = get_field('image-bulle'); 
					if (has_post_thumbnail(  )) :
  						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ))[0]; 
					endif; ?>
                <div class="article"
                     style="background-image: url(<?php echo $image;  ?>);">
                    <div class="vide"></div>
                    <div class="texte">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </a>

        </li>


    <?php endwhile; ?>


<?php
endif;


get_footer();

?>
