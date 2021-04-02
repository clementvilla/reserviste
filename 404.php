<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */
/**clement**/
get_header();
?>

    <div id="notFound" class="header-correction">

        <div  class="baniere" style=background-image:url("<?php echo get_bloginfo('template_directory')?>/images/fond-engager.jpg");>
            <section class="slogan">
                <h1>Page non trouvée !</h1>
                <img alt="logo header" src= <?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-titre.png>
            </section>
        </div>

        <main id="main" class="site-main bodyPadding" style="height:20vh">

            <h1 class="page-title"><?php esc_html_e( 'Oh non ! Il semble que cette page n\'existe plus ou n\'a jamais existé...', '_s' ); ?></h1>
            <p>Si le problème persiste, merci de contacter l'administrateur du site.</p>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
