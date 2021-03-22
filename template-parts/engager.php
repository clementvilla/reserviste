<?php
/*
Template Name: pageEngager
*/
?>

<?php
get_header();
?>

<div  class="sengager" style=background-image:url(<?php echo get_bloginfo('template_directory'). "/images/fond-engager.jpg"?>);>
    <section class="slogan">
        <h1>S'ENGAGER</h1>
        <img alt="logo header" src= <?php echo get_bloginfo('template_directory')?>"/images/images-galerie/logo-titre.png">
    </section>
</div>

<main id="engager">

        <?php the_content() ?>

    </main>

    <!--
       
    <main id="engager">
       <!--<?php the_content() ?>-->
        <div class="formulaire">
            <h2>FORMULAIRE DE DEMANDE D'ADHESION</h2>


            <form action="">

                <div class="haut">
                    <label for="">
                        <input type="text" name="nom" placeholder="Nom">
                        <input type="text" name="prenom" placeholder="Prénom">
                        <input type="text" name="email" placeholder="Email">
                        <input type="text" name="age" placeholder="Date de Naissance">
                        <input type="text" name="nationalite" placeholder="Nationalité">
                    </label>
                    <label for="">
                        <input type="text" name="profession" placeholder="Profession">
                        <input type="text" name="adresse" placeholder="Adresse">
                        <textarea name="infos" id="" cols="30" rows="2"
                                  placeholder="informations Complémentaires"></textarea>

                    </label>
                    
                </div>
                <div class="bas">

                    <ul>
                        <li>
                            <img src=<?php  echo home_url()."/wp-content/uploads/2018/12/localisation.png"?>
                                 alt="">
                        </li>
                        <li>	
							<img src=<?php  echo home_url()."wp-content/uploads/2018/12/mobile.png"?>
                                 alt="">15 rue le noyeu - 70400 Vyans le val
                        </li>
                        <li>
                            <img src=<?php  echo home_url()."wp-content/uploads/2018/12/mobile.png"?>
                                 alt="">06
                            &nbsp07
                            &nbsp04
                            &nbsp03
                            &nbsp02
                        </li>
                        <li>
                            <img src=<?php  echo home_url()."wp-content/uploads/2018/12/fixe.png"?>
                                 alt="">03
                            &nbsp01
                            &nbsp02
                            &nbsp09
                            &nbsp08
                        </li>
                        <li>
                            <img src=<?php  echo home_url()."wp-content/uploads/2018/12/mail.png"?>
                                 alt="">reserviste@gmail.com
                        </li>
                    </ul>

                    <div>
                        <button>Envoyer ma demande</button>
                    </div>
					<div>
                      <p><br><br>
                        <span>Nous vous recontacterons une fois la demande traitée !</span>
                        <br>
                        <br>
                        Merci d'avoir pris le temps de remplir ce formulaire
                        <br>
                        N'hésitez pas à nous contacter pour des informations plus précises !
                      </p>
				    </div>
                </div>
            </form>
        </div>
    </main>

-->


<?php
get_footer();
?>