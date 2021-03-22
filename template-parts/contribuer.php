<?php
/*
Template Name: pagecontribuer
*/
?>

<?php
get_header();
?>

<div  class="sengager" style=background-image:url(<?php echo get_bloginfo('template_directory'). "/images/fond-engager.jpg"?>);>
    <section class="slogan">
        <h1>CONTRIBUER</h1>
        <img alt="logo header" src= <?php echo home_url()."/wp-content/themes/reserviste-montbeliard/images/images-galerie/logo-titre.png"?>>
    </section>
</div>

<main id="participate">
	<?php the_content() ?>

</main>

<?php
get_footer();
?>
