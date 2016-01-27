<?php
    // Permet le tri entre le utilisateurs connectes et les non connectes
    session_start();
    if(!isset($_SESSION['login'])){
        header('location: ./pages/login.php');
    }
    else{
        header('location: ./index2.php');
    }
?>