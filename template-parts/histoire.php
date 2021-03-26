<?php
/*
Template Name: pageHistoire
*/
?>

<?php
get_header();
?>


<main id="histoire" class="header-correction">

    <div  class="sengager" style=background-image:url(<?php echo get_bloginfo('template_directory')?>/images/fond-engager.jpg);>
        <section class="slogan">
            <h1>L'HISTOIRE DE L'ASSOCIATION</h1>

            <img alt="logo header" src=<?php echo get_bloginfo('template_directory')?>/images/images-galerie/logo-titre.png>
        </section>
    </div>

    <?php the_content() ?>

    </main>

    <script>
        $(document).ready(function() {
            $('.scrollTo').on('click', function() {
                var page = $(this).attr('href');
                var speed = 750;
                $('html, body').animate( { scrollTop: $(page).offset().top}, speed );
                return false;
            });
        });
    </script>

<?php
get_footer();
?>