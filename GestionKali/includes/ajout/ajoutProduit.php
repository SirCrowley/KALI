<?php
    session_start();
    include_once '../database.php';
    include_once '../verifChamp.php';
    $base = dbConnect();
    $donnees = verifProduit($_POST);
    dbInsertProduit($donnees, $base);
    header('location: ../../pages/produits/produitsadd.php');
?>