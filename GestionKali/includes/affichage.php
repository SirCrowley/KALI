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
?>