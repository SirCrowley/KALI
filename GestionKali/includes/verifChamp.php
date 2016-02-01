<?php
    // Fonction de verification des champs rentres dans le form Client
    // @return : $arrayVerif
    // @params : $arrayPost
    function verifClient($arrayPost)
    {
        $arrayVerif = array();
        if(isset($arrayPost['nom']))
            $arrayVerif['nom'] = filter_var($arrayPost['nom'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['nom'] = "NA";
        
        if(isset($arrayPost['prenom']))
            $arrayVerif['prenom'] = filter_var($arrayPost['prenom'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['prenom'] = "NA";
        
        if(isset($arrayPost['societe']))
            $arrayVerif['societe'] = filter_var($arrayPost['societe'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['societe'] = "NA";
        
        if(isset($arrayPost['adresse']))
            $arrayVerif['adresse'] = filter_var($arrayPost['adresse'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['adresse'] = "NA";
        
        if(isset($arrayPost['cp']))
            $arrayVerif['cp'] = filter_var($arrayPost['cp'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['cp'] = "NA";
        
        if(isset($arrayPost['ville']))
            $arrayVerif['ville'] = filter_var($arrayPost['ville'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['ville'] = "NA";
        
        if(isset($arrayPost['email']))
            $arrayVerif['email'] = filter_var($arrayPost['email'], FILTER_SANITIZE_EMAIL);
        else
            $arrayVerif['mail'] = "NA";
        
        if(isset($arrayPost['fixe']))
            $arrayVerif['fixe'] = filter_var($arrayPost['fixe'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['fixe'] = "NA";
        
        if(isset($arrayPost['portable']))
            $arrayVerif['portable'] = filter_var($arrayPost['portable'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['portable'] = "NA";
        
        if(isset($arrayPost['notes']))
            $arrayVerif['notes'] = filter_var($arrayPost['notes'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['notes'] = "NA";
        
        return $arrayVerif;
    }
    
    // Fonction de verification des champs rentres dans le form Produit
    // @return : $arrayVerif
    // @params : $arrayPost
    function verifProduit($arrayPost)
    {
        $arrayVerif = array();
        if(isset($arrayPost['reference']))
            $arrayVerif['reference'] = filter_var($arrayPost['reference'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['reference'] = "NA";
        
        if(isset($arrayPost['nom']))
            $arrayVerif['nom'] = filter_var($arrayPost['nom'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['nom'] = "NA";
        
        if(isset($arrayPost['prix']))
            $arrayVerif['prix'] = filter_var($arrayPost['prix'], FILTER_SANITIZE_NUMBER_INT);
        else
            $arrayVerif['prix'] = -1;
        
        if(isset($arrayPost['marque']))
            $arrayVerif['marque'] = filter_var($arrayPost['marque'], FILTER_SANITIZE_NUMBER_INT);
        else
            $arrayVerif['marque'] = -1;
        
        
        return $arrayVerif;
    }
    
    // Fonction de verification des champs rentres dans le form Marque
    // @return : $arrayVerif
    // @params : $arrayPost
    function verifMarque($arrayPost)
    {
        $arrayVerif = array();
        
        if(isset($arrayPost['nom']))
            $arrayVerif['nom'] = filter_var($arrayPost['nom'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['nom'] = "NA";
        
        return $arrayVerif;
    }
    
    // Fonction de verification des champs rentres dans le form Rendez vous
    // @return : $arrayVerif
    // @params : $arrayPost
    function verifRdv($arrayPost)
    {
        $arrayVerif = array();
        
        if(isset($arrayPost['date']))
            $arrayVerif['date'] = strtotime($arrayPost['date']);
        else
            $arrayVerif['date'] = "NA";
        
        if(isset($arrayPost['lieu']))
            $arrayVerif['lieu'] = filter_var($arrayPost['lieu'], FILTER_SANITIZE_STRING);
        else
            $arrayVerif['lieu'] = "NA";
        
        if(isset($arrayPost['client']))
            $arrayVerif['client'] = filter_var($arrayPost['client'], FILTER_SANITIZE_NUMBER_INT);
        else
            $arrayVerif['client'] = "NA";
        
        return $arrayVerif;
    }
    
    // Fonction de verification des champs rentres dans le form Rendez vous
    // @return : $arrayVerif
    // @params : $arrayPost
    function verifAchat($arrayPost)
    {
        $arrayVerif = array();
        
        if(isset($arrayPost['client']))
            $arrayVerif['client'] = filter_var($arrayPost['client'], FILTER_SANITIZE_NUMBER_INT);
        else
            $arrayVerif['client'] = 0;
        
        if(isset($arrayPost['produit']))
            $arrayVerif['produit'] = filter_var($arrayPost['produit'], FILTER_SANITIZE_NUMBER_INT);
        else
            $arrayVerif['produit'] = 0;
        
        if(isset($arrayPost['date']))
            $arrayVerif['date'] = strtotime($arrayPost['date']);
        else
            $arrayVerif['date'] = "NA";
        
        if(isset($arrayPost['quantite']))
            $arrayVerif['quantite'] = filter_var($arrayPost['quantite'], FILTER_SANITIZE_NUMBER_INT);
        else
            $arrayVerif['quantite'] = 0;
        
        return $arrayVerif;
    }
?>