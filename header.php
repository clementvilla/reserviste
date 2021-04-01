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

<div id="page" class="site">

    <header>

        <div class="header">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1'
            )); ?>
        </div>




    </header>


</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/navigation.js"></script>

</body>