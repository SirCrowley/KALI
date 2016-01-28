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
?>