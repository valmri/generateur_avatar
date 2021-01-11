<?php 
//Paramètre
include "getRacine.php";
$fichier = "c_SaisiePseudo.php";

//Controle
if (isset($_GET["action"])){
    if($_GET["action"]==="generer"){
        $fichier="c_AffichageAvatar.php";
    }else {
        if ($_GET["action"]==="aide") {
            $fichier="c_Aide.php";
        }
    }
}

include "$racine/controleur/$fichier";
?>