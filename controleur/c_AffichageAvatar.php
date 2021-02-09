<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

// Initialisation des variables :
$messageErreur="";    // Variable permettant d'afficher les messages d'erreurs
$verifAvatar="";        // Variable permettant de vérifier l'exitence de l'avatar dans l'API
$verifPseudo="";        // Variable permettant de vérifier l'existence du pseudo dans l'hôtel en fonction salon l'API
$ok = false;            // Variable permettant d'afficher le résultat (image avatar + lien)

// Récupération des données
if (isset($_POST["pseudo"]) && isset($_POST["hotel"])){                             // Contrôle et récupération des valeurs de "pseudo" et "hotel"
    if ($_POST["pseudo"]!=="") {                                                    // Vérification de la valeur saisie par l'utilisateur
        $pseudo = $_POST["pseudo"];                                                 // Initialisation de la variable pseudo
        $api = file_get_contents("https://api.habboapi.net/habbos?name=".$pseudo);  // Initialisation de la variable $api 
        $decode = json_decode($api);                                                // Initialisation de la variable qui décode $api
        $verifPseudo = $decode->from;                                               // Initialisation de la variable pour vérifier l'existence du pseudo dans l'API
        
        // Vérification de la valeur de $verifPseudo :
        if ($verifPseudo!==null) {
            $data=$decode->data;                        // Récupération des données dans le fichier json
            $a=0;                                       // Initialisation du compteur de la boucle
            while ($a < count($data)) {                 // Boucle qui crée le tableau avec les hôtels où est l'utilisateur
                $verifHotel=$decode->data[$a]->hotel;   // Récupération des hôtels
                $hotel[] = $verifHotel;                 // Ajout des hôtels au tableau
                $a=$a+1;                                // Augmentation du compteur
            }            
            for ($i=0; $i < count($hotel); $i++) {      // Boucle qui permet de vérifier si l'utilisateur existe dans l'hôtel sélectionné
                if ($_POST["hotel"]===$hotel[$i]) {     // Récupération de l'hôtel sélectionné
                    $verifAvatar=true;                  // Affectation valeur booléenne pour poursuivre le programme
                }
            }

            // Vérification de la valeur de $verifJoueur :
            if($verifAvatar===true){
                // Récupération du reste des valeurs pour optimiser le programme :
                if (isset($_POST["size"]) && isset($_POST ["headOnly"]) && isset($_POST["gesture"]) && isset($_POST["action"])) { 
                    //Initialisation des variables :
                    $resultat = "";                                             // Variable permettant de constituer le lien
                    $hotel=$_POST["hotel"];                                     // Variable ayant comme valeur l'hôtel de l'utilisateur
                    $pseudo=$_POST["pseudo"];                                   // Variable ayant comme valeur le pseudo de l'utilisateur
                    $tete=$_POST ["headOnly"];                                  // Variable ayant comme valeur 0 ou 1 pour afficher la tête
                    $action=$_POST["action"];                                   // Logique à suivre à partir de action : &action=sit,drk=5 -> &action=[ACTION1],[ACTION BOIRE/TENIR]=[numero objet]
                    if (isset($_POST["saluer"])) {                              // Controle et récupération de la valeur de la case "saluer"
                        $saluer=$_POST["saluer"];                               // Variable ayant comme valeur "wav"
                    }
                    if (isset($_POST["actObjet"]) && isset($_POST['objet'])){   // Contrôle et récupération des valeurs des cases "actObjet" et "objet"
                        $actObjet=$_POST["actObjet"];                           // Variable ayant comme valeur tenir ou boire
                        $objet=$_POST['objet'];                                 // Variable ayant comme valeur le numero d'un objet
                    }
                    $emotion=$_POST["gesture"];                                 // Variable ayant comme valeur l'émotion/expression de l'utilisateur
                    if (isset($_POST["head_direction"])) {                      // Contrôle et récupération de la valeur de "head_direction"
                        $direction_tete=$_POST["head_direction"];               // Variable ayant comme valeur la direction de tête de l'utilisateur
                    }else {                                                     
                        $direction_tete=2;                                      // Affection de la valeur "2" par défaut si l'utilisateur ne sélectionne rien
                    }
                    if (isset($_POST["direction"])) {                           // Contrôle et récupération de la valeur de "direction"
                        $direction_corps=$_POST["direction"];                   // Variable ayant commme valeur la direction du corps de l'utilisateur
                    }else {
                        $direction_corps=2;                                     // Affection de la valeur "2" par défaut si l'utilisateur ne sélectionne rien
                    }
                    $taille=$_POST["size"];                                     // Variable ayant comme valeur la taille sélectionné par l'utilisateur

                    // Composition de l'url :
                    // Format de l'url par défaut : https://www.habbo.fr/habbo-imaging/avatarimage?user=null&action=null&gesture=null&direction=2&head_direction=2&size=n
                    $lookUrl="https://www.habbo.".$hotel."/habbo-imaging/avatarimage?user="; // Initialisation de l'url
                    $resultat=$lookUrl.$pseudo;                                              // Concaténation avec le pseudo
                    $resultat=$resultat."&headonly=".$tete;                                  // Concaténation avec l'option de seulement la tête
                    $resultat=$resultat."&action=".$action;                                  // Concaténation avec l'action
                    if (isset($actObjet) && isset($objet)) {                                 // Vérification des valeurs de $actObjet et $objet pour l'afficher ou non
                        if($actObjet){                                                       // Cas où il y a seulement une action tenir/boire sans objet
                            $resultat=$resultat.",".$actObjet;                               // Concaténation avec tenir ou boire
                        }
                        if ($actObjet && $objet) {                                           // Cas où il y a une action tenir/boire et un objet
                            $resultat=$resultat."=".$objet;                                  // Concaténation avec tenir ou boire un objet à la suite de $action
                        }                        
                    }
                    if (isset($saluer) && $saluer !== "null") {                                // Cas où saluer est sélectionné
                        $resultat=$resultat.",".$saluer;                                     // Concaténation à la suite de $action
                    }else {
                        $resultat=$resultat."";
                    }
                    $resultat=$resultat."&gesture=".$emotion;                                // Concaténation avec l'émotion
                    $resultat=$resultat."&head_direction=".$direction_tete;                  // Concaténation avec la direction de la tête
                    $resultat=$resultat."&direction=".$direction_corps;                      // Concaténation avec la direction du corps  
                    $resultat=$resultat."&size=".$taille;                                    // Concaténation avec la taille
                    $ok=true;                                                                // Booléen pour charger la vue du resultat
                }
            }else {
                $messageErreur = "Le pseudo saisi n'existe pas dans cet hôtel !";        // Cas où l'uitlisatuer rentre un pseudo innexistant dans l'hôtel sélectionné d'après l'API
            }          
        }else {
            $messageErreur = "Le pseudo saisi n'existe pas !";                           // Cas où l'utilisateur rentre un pseudo innexistant d'après l'API
        }
    }else{
        $messageErreur = "Merci de saisir un pseudo !";                                  // Cas où l'utilisateur valide le formulaire sans pseudo
    }
}

// Redirection en fonction de la valeur de $ok :
if ($ok){
    include "$racine/vue/vueGenerateur.php";
}else{
    include "$racine/vue/vueSaisiePseudo.php";
}
?>