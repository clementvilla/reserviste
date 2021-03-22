<?php
/*
Template Name: Roperationnelle
*/
?>

<?php
get_header();
?>

<div  class="sengager" style=background-image:url(<?php echo get_bloginfo('template_directory')?>"/images/fond-engager.jpg");>
    <section class="slogan">
        <h1>GARDE OPÉRATIONNELLE</h1>
        <img alt="logo header" src=<?php echo get_bloginfo('template_directory')?>"/images/images-galerie/logo-titre.png">
    </section>
</div>

<main id="intro-operar">

        <?php the_content() ?>

    </main>



<?php
get_footer();
?>