<?php

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
?>
<a href="index.php">ddeconnexion</a>

