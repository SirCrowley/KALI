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
        $data = $base->prepare('SELECT DISTINCT * FROM Clients');
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
    function dbSelectMarque($base)
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
    
    // Fonction de requete INSERT Pour les clients
    // @return : n/a
    // @params : $arrayDatas
    function dbInsertClient($arrayDatas, $base)
    {
        $data = $base->prepare('INSERT INTO Clients(clients_nom, clients_prenom, '
                . 'clients_societe, clients_adresse, clients_cp, clients_ville, '
                . 'clients_email, clients_fixe, clients_portable, clients_notes) '
                . 'VALUES(:nom, :prenom, '
                . ':societe, :adresse, :cp, :ville, :email, :fixe, :portable, '
                . ':notes)');
        $data->bindValue(':nom', $arrayDatas['nom'], PDO::PARAM_STR);
        $data->bindValue(':prenom', $arrayDatas['prenom'], PDO::PARAM_STR);
        $data->bindValue(':societe', $arrayDatas['societe'], PDO::PARAM_STR);
        $data->bindValue(':adresse', $arrayDatas['adresse'], PDO::PARAM_STR);
        $data->bindValue(':cp', $arrayDatas['cp'], PDO::PARAM_STR);
        $data->bindValue(':ville', $arrayDatas['ville'], PDO::PARAM_STR);
        $data->bindValue(':email', $arrayDatas['email'], PDO::PARAM_STR);
        $data->bindValue(':fixe', $arrayDatas['fixe'], PDO::PARAM_STR);
        $data->bindValue(':portable', $arrayDatas['portable'], PDO::PARAM_STR);
        $data->bindValue(':notes', $arrayDatas['notes'], PDO::PARAM_STR);
        $data->execute();
    }
?>