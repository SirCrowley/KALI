<?php
    // Fonction de connexion a la base de donnees
    // @return : $base
    function dbConnect()
    {
        // Declaration des variables
        $user = 'root';
        $passwd = '123456';
        $host = 'localhost';
        $bdd = 'KaliGestion';
        
        // Connexion
        $base = new PDO('mysql:host=localhost;dbname=KaliGestion', 'root', '123456');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Renvoi de la base
        return $base;
    }
    
    // Fonction de requete SELECT du login
    // @return : $data
    // @params : $base
    function dbSelectLogin($base)
    {
        $data = $base->prepare('SELECT * FROM Utilisateurs');
        $data->execute();
        return $data;
    }
    
    // Fonction de requete SELECT Pour les clients
    // @return : $data
    // @params : $base
    function dbSelectClient($base)
    {
        $data = $base->prepare('SELECT * FROM Clients');
        $data->execute();
        return $data;
    }
    
    // Fonction de requete SELECT Pour les produits
    // @return : $data
    // @params : $base
    function dbSelectProduit($base)
    {
        $data = $base->prepare('SELECT * FROM Produits');
        $data->execute();
        return $data;
    }
    
    // Fonction de requete SELECT Pour les marques
    // @return : $data
    // @params : $base
    function dbSelectMarques($base)
    {
        $data = $base->prepare('SELECT * FROM Marques');
        $data->execute();
        return $data;
    }
    
    // Fonction de requete SELECT Pour les rdv
    // @return : $data
    // @params : $base
    function dbSelectRDV($base)
    {
        $data = $base->prepare('SELECT * FROM Rdvs');
        $data->execute();
        return $data;
    }
?>