<?php
    function afficheTab($data)
    {
        $listeData = $data->fetchAll(PDO::FETCH_ASSOC);
        foreach($listeData as $cle => $bigarray)
        {
            echo '<tr>';
            foreach($bigarray as $cle2 => $littlearray)
            {
                echo '<td>'.$littlearray.'</td>';
            }
            echo '</tr>';
        }
    }
    
    // Fonction d'affichage du champ client dans le form Rendez vous
    // @return : $arrayVerif
    // @params : $arrayPost
    function afficheMenu($data)
    {
        $listeData = $data->fetchAll(PDO::FETCH_ASSOC);
        foreach($listeData as $cle => $bigarray)
        {
            echo '<option';
            foreach($bigarray as $cle2 => $littlearray)
            {
                if($cle2 == "clients_id")
                {
                    echo ' value="'.$littlearray.'" >';
                }
                else 
                {
                    echo $littlearray.' | ';
                }
            }
            echo '</option>';
        }
    }
?>