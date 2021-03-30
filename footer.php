<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<!-- ?php
wp_nav_menu(array(
    'theme_location' => 'menu-2'
)); ?-->

<div><!-- #content -->

    <footer class="piedpage">

        <section class="contenu3">


            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-5'
            )); ?>

            <!-- img alt="logo header" src=< ?php echo get_bloginfo('template_directory') ?>/images/images-galerie/logo-titre.png -->

            <!-- ajout de ma nouvelle widget area -->
            <!--?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
                <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
                    < ?php dynamic_sidebar( 'new-widget-area' ); ?>
                </div>
            <:--?php endif; ? -->
            <!-- fin nouvelle widget area -->
<!--
            < ?php dynamic_sidebar( 'new-widget-area' ); ?>
-->
            <!--<ul>
                <li>
                    <a href="#">Association des réservistes <br> du pays de Montbéliard</a>
                </li>
                <li>
                    <a href="#">Adresse</a>
                </li>
                <li>
                    <a href="#">25200 Montbéliard</a>
                </li>
            </ul>-->

            <!-- ?php dynamic_sidebar( 'footer-sidebar-1' ); ?-->



            <!--?php
            wp_nav_menu(array(
                'theme_location' => 'menu-3'
            )); ?-->

            <!--<ul>
                <li>
                    <a href="#">Téléphone</a>
                </li>
                <li>
                    <a href="#">Adresse mail</a>
                </li>
                <li>
                    <a href="#">Facebook</a>
                </li>
                <li>
                    <a href="#">Instagram</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>-->

            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-4'
            )); ?>

            <!--<ul>
                <li>
                    <a href="#">Vie associative</a>
                </li>
                <li>
                    <a href="#">Actualités</a>
                </li>
                <li>
                    <a href="#">Production de l'association</a>
                </li>
                <li>
                    <a href="#">Découvir la garde</a>
                </li>
                <li>
                    <a href="#">S'engager</a>
                </li>
            </ul>-->

        </section>



    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
