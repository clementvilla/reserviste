<?php

get_header();

$args = array(
    'post_type' => 'galerie'
);
query_posts($args);
while (have_posts()) : the_post(); ?>


<div><?php
                $image = get_field("image");
                if( $image ):

                    // Image variables.
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                    $caption = $image['caption'];

                    // Thumbnail size attributes.
                    $size = 'thumbnail';
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];

                    // Begin caption wrap.
                    if( $caption ): ?>
                        <div class="wp-caption">
                    <?php endif; ?>

                    <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                    </a>

                    <?php 
                    // End caption wrap.
                    if( $caption ): ?>
                        <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>


<?php endwhile; ?>





<?php
get_footer();
?>
