<?php
/*
Template Name: articleType
*/
?>

<?php
get_header()
?>

<div  class="sengager" style=background-image:url(<?php echo get_bloginfo('template_directory'). "/images/fond-engager.jpg"?>);>
    <section class="slogan">
        <h1>ARTICLES</h1>
        <img alt="logo header" src= <?php echo home_url()."/wp-content/themes/reserviste-montbeliard/images/images-galerie/logo-titre.png"?>>
    </section>
</div>

<!--
<div class="articles">

    <section class="grille-articles">

    

        <div class="article1">
        <img alt="logo header" src= <?php echo home_url()."/wp-content/themes/reserviste-montbeliard/images/images-galerie/marche.jpg"?>>
            <h3>Comités - Bureaux</h3>
            <p>Les membres des comités <br>
             de nos associations</p>
        </div>

        <div class="article2">
        <img alt="logo header" src= <?php echo home_url()."/wp-content/themes/reserviste-montbeliard/images/images-galerie/marche.jpg"?>>
            <h3>AG - 2019</h3>
            <p>Les points important de l'Assemblée <br>
             générale 2019.</p>
        </div>

        <div class="article3">
        <img alt="logo header" src= <?php echo home_url()."/wp-content/themes/reserviste-montbeliard/images/images-galerie/marche.jpg"?>>
            <h3>Activités 2020 de la SociétéNeuchatêloise des Officiers</h3>
            <p>Activités 2020 SNO, notre association <br>
             partenaire en Suisse</p>
        </div>

        <div class="article4">
        <img alt="logo header" src= <?php echo home_url()."/wp-content/themes/reserviste-montbeliard/images/images-galerie/marche.jpg"?>>
            <h3>Contenus du colis Solidarité Défense</h3>
            <p>Aperçu du contenu des colis Solidarité Défenseque chacun de nos <br>
                soldat en opérationsreçoit à la <br>
                période de Noêl</p>
        </div>

    </section>


</div>

-->

<main id="articles">

        <?php the_content() ?>

    </main>


<!--
<main id="articlType">

    <h2>Défilé du 11 novembre</h2>
    <h3>Un défilé en couleur</h3>
    <br>
    <img src="../images/images-galerie/monument.jpg" alt="">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis libero nostrum officia perspiciatis repellat
        vel. Ad assumenda debitis doloribus earum provident quam, quia quos recusandae suscipit unde! Dolores, earum,
        molestiae?</p>
    <img src="../images/images-galerie/soldier.jpg" alt="">
    <h3>Le parcour</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequatur deleniti, illo iste laboriosam
        modi natus necessitatibus neque officiis placeat repellat suscipit voluptas! A dicta dolorum eveniet, fuga ipsam
        voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aspernatur, consectetur corporis
        dolores esse, ex fugit in magnam non nulla placeat porro provident quaerat reiciendis saepe suscipit tenetur
        voluptatibus. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda commodi delectus
        dolores dolorum ducimus eos eveniet facere, iure minus, molestiae obcaecati odit provident quidem quod
        reiciendis sed sequi voluptatum.</p>

    <p class="signature">
rédigé par <span>Jules Perret</span>
        <br>
le <span>08/10/20118</span>

    </p>
</main>

-->

<?php

get_footer()

?>