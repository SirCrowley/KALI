<?php
    session_start();
    include_once '../database.php';
    include_once '../verifChamp.php';
    $base = dbConnect();
    $donnees = verifClient($_POST);
    dbInsertClient($donnees, $base);
    header('location: ../../pages/clients/clientsadd.php');
?>