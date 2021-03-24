<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png"
          href=<?php echo home_url() . "/wp-content/uploads/2019/01/logo-header.ico" ?>/>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <header>

    <div class="header">
        <!--
        <a href=<?php echo home_url() . "/accueil" ?>>
            <figure>
                <img alt="logo header"
                     src= "<?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-header.png">
            </figure>
        </a>-->

        <?php

        wp_nav_menu(array(
            'theme_location' => 'menu-1'
        )); ?>
    </div>


 <!--       <div class="menu-content">
            <section class="menu">
                <label class="open-menu-all" for="open-menu-all">
                    <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open"/>
                    <div class="navegacao-mobile">
                        <span class="linha-menu"></span>
                        <span class="linha-menu"></span>
                        <span class="linha-menu"></span>
                    </div>

                    <ul class="list-menu">



                        <li class="item-menu">
                            <a href="#" class="link-menu">Vie Associative</a>
                            <ul class="sous">
                                <li>
                                    <a href=<?php echo home_url() . "/contribuer-2/" ?>  class="link-menu">Contribuer</a>
                                </li>
                                <li><a href=<?php echo home_url() . "/histoire/" ?> class="link-menu">Histoire</a></li>
                                <li><a href=<?php echo home_url() . "/internationnal/" ?> class="link-menu">L'internationnal</a>
                                </li>
                            </ul>
                        </li>

                        <li class="item-menu">
                            <a href="#" target="_blank" class="link-menu">Actualités</a>
                            <ul class="sous">
                                <li><a href=<?php echo home_url() . "/article-type/" ?>  class="link-menu">Articles</a>
                                </li>
                                <li><a href=<?php echo home_url() . "/calendrier/" ?>  class="link-menu">Évenements</a>
                                </li>
                            </ul>
                        </li>
                        <li class="item-menu">
                            <a href=<?php echo home_url() . "/sengager/" ?>  class="link-menu">S'engager</a>
                        </li>
                        <li class="item-menu">
                            <a href="#" target="_blank" class="link-menu">Activités</a>
                            <ul class="sous">
                                <li><a href="#">Bulletins</a></li>
                                <li><a href=<?php echo home_url() . "/pageDessin/" ?>  class="link-menu">Dessins de
                                        Noël</a></li>
                                <li><a href="#">Conférences</a></li>
                            </ul>
                        </li>

                        <li class="item-menu">
                            <a href="#" target="_blank" class="link-menu">Découvrir la garde</a>
                            <ul class="sous">
                                <li><a href=<?php echo home_url() . "/reserve-citoyenne/" ?>  class="link-menu">Garde
                                        citoyenne</a></li>
                                <li><a href=<?php echo home_url() . "/garde-operationnelle/" ?>  class="link-menu">Garde
                                        opérationnelle</a></li>
                            </ul>
                        </li>

                        <li class="item-menu">
                            <a href="https://reservistesdupaysdemontbeliard.cbouvier.fr/galerie-2/" class="link-menu">Galerie</a>
                        </li>

                        <a href=<?php echo home_url() . "/wp-admin" ?>>

                            <figure>
                                <img alt="boutton de connexion"
                                     src= <?php echo home_url() . "/wp-content/uploads/2018/12/user-white.png" ?>>

                            </figure>
                        </a>

                    </ul>

                </label>


            </section>
        </div>-->


    </header>


</div>
</body>