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
    <link rel="shortcut icon" type="image/png"
          href=<?php echo home_url() . "/wp-content/uploads/2019/01/logo-header.ico" ?>/>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

    <div class="header">
        <div id="menu-open-trigger" style=background-image:url("<?php echo get_bloginfo('template_directory')?>/images/images-menu/menu.svg");></div>
        <?php

        wp_nav_menu(array(
            'theme_location' => 'menu-1'
        )); ?>
        <div id="menu-close-trigger" style=background-image:url("<?php echo get_bloginfo('template_directory')?>/images/images-menu/cross.svg");></div>
    </div>

</header>


</body>