<?php
    session_start();
    include_once '../database.php';
    include_once '../verifChamp.php';
    $base = dbConnect();
    $donnees = verifRdv($_POST);
    dbInsertRdv($donnees, $base);
    header('location: ../../pages/rdv/rdvadd.php');
?>

