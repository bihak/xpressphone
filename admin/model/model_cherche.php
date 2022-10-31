<?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['recherche'])) {
                $recherche=$_POST['recherche'];
                $tab=explode(' ',$recherche);
                if (!isset($tab[1])) {
                    $tab[1]= ' ';
                }
                $clients = $cnx->query('select * from client NATURAL JOIN type_client where Nom_client = "'.$tab[0].'" OR Prenom_client = "'.$tab[0].'" OR Prenom_client = "'.$tab[1].'"');
                $listeclients = $clients->fetchall();  
                $repa = $cnx->query('select * from materiel_reparation NATURAL JOIN client NATURAL JOIN marque where Nom_client = "'.$tab[0].'" OR Prenom_client = "'.$tab[0].'" OR Prenom_client = "'.$tab[1].'"');
                $listerepa = $repa->fetchall();  
            }else {
                
            }
        }
?>