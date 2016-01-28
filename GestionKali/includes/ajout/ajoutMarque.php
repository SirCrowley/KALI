<?php
    session_start();
    include_once '../database.php';
    include_once '../verifChamp.php';
    $base = dbConnect();
    $donnees = verifMarque($_POST);
    dbInsertMarque($donnees, $base);
    header('location: ../../pages/marques/marquesadd.php');
?>