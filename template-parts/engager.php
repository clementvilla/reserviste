<?php
/*
Template Name: pageEngager
*/
?>

<?php
get_header();
?>


<main id="engager" class="header-correction">

    <div  class="baniere" style=background-image:url(<?php echo get_bloginfo('template_directory')?>/images/fond-engager.jpg);>
        <section class="slogan">
            <h1>S'ENGAGER</h1>
            <img alt="logo header" src= <?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-titre.png>
        </section>
    </div>

    <div class="bodyPadding">
        <?php the_content() ?>
    </div>

    </main>

<?php
get_footer();
?>