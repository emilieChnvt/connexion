<?php

session_start();//démarrer session

$users = [
    "luc"=> "motDePasseDeLuc4",
    "michel"=> "pasteque",
    "eglantine"=> "choucroute",
    "patricia"=> "surf"
];

$name = null;
$pswd = null;

if(!empty($_POST["name"])){
    $name = $_POST["name"];
}

if(!empty($_POST["pswd"])){
    $pswd = $_POST["pswd"];
}
if($name && $pswd && $users[$name] && $users[$name] == $pswd){
    $_SESSION['user'] = $name;
    header("location: resultats.php");
}else{
    header("location: index.php");
}
//
//les bons utilisateurs et mot de passe
// peuvent se connecter, les autres sont renvoyés à l'accueil
//
//Sur une connection réussie, on renvoie vers la page résultat qui dit bravo.
//elle a un bouton déconnexion (retour accueil)

?>


