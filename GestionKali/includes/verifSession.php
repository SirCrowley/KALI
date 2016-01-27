<?php
    session_start();
    include_once 'database.php';
    $base = dbConnect();
    $data = dbSelectLogin($base);
    $listeData = $data->fetchAll();
    if($listeData[0]['utilisateurs_login'] == $_POST['identification'])
    {
        if($listeData[0]['utilisateurs_pass'] == $_POST['pass']){
            $_SESSION['login'] = $_POST['identification'];
            header('location:../index2.php');
        }
    }
?>