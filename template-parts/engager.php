<?php
/*
Template Name: pageEngager
*/
?>

<?php
get_header();
?>


<main id="engager" class="header-correction">

    <div  class="sengager" style=background-image:url(<?php echo get_bloginfo('template_directory')?>/images/fond-engager.jpg);>
        <section class="slogan">
            <h1>S'ENGAGER</h1>
            <img alt="logo header" src= <?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-titre.png>
        </section>
    </div>

    <?php the_content() ?>

    </main>

       
    <main id="engager">

    </main>

<?php
get_footer();
?>