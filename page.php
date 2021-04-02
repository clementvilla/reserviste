<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>


	<div id="primary" class="header-correction">

        <div  class="baniere" style=background-image:url("<?php echo get_bloginfo('template_directory')?>/images/fond-engager.jpg");>
            <section class="slogan">
                <h1><?php echo esc_html( get_the_title() );?></h1>
                <img alt="logo header" src= <?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-titre.png>
            </section>
        </div>

		<main id="main" class="site-main bodyPadding">

		<?php
            the_content()
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
?>