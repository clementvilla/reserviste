<?php
/*
Template Name: groop
*/
?>

<?php
get_header();
?>

<div  class="sengager" style=background-image:url(<?php echo get_bloginfo('template_directory')?>/images/fond-engager.jpg);>
    <section class="slogan">
        <h1>L'INTERNATIONNAL</h1>
        <img alt="logo header" src=<?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-titre.png>
    </section>
</div>

<main id="texte-internationnal">

        <?php the_content() ?>

    </main>


<?php
get_footer();
?>