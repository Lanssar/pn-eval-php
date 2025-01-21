<?php
session_start();
require_once('../model/model.php');

//Récupération du nom d'utilisateur
if (!isset($_session["id"])) {

    require_once("../view/listView.php");
} else {
    header("location: ../controller/home.php");
}



//récupération de la liste des évènements dans la base de données


require_once('../view/listView.php');

$bdd=new Model();
$bookList = $bdd->getAllBooks();


?>