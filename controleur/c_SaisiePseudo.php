<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
//include_once "$racine/modele/bd.resto.inc.php";

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
;

// traitement si necessaire des donnees recuperees
;
                              
                               
                                   
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Générateur Habbo";
include "$racine/vue/vueSaisiePseudo.php";
?>