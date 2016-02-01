<?php
    session_start();
    include_once '../database.php';
    include_once '../verifChamp.php';
    $base = dbConnect();
    $donnees = verifAchat($_POST);
    dbInsertAchat($donnees, $base);
    header('location: ../../pages/achats/achatsadd.php');
?>