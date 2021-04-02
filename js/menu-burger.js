
/*Fonctionnement du menu burger*/

( function() {

    let triggerOpen = document.querySelector("header #menu-open-trigger");
    let triggerClose = document.querySelector("header #menu-close-trigger");
    let header = document.querySelector("header");

    triggerOpen.addEventListener("click", function(){ header.classList.toggle('menuOpened'); document.body.classList.toggle('lock-scroll'); } );
    triggerClose.addEventListener("click", function(){ header.classList.toggle('menuOpened'); document.body.classList.toggle('lock-scroll'); } );




} )();