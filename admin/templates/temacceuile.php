
<?php
    if (($_SESSION['user'] == $donneeconexion[0]->Pseudo && $_SESSION['pass']== $donneeconexion[0]->Mots_de_pass) ) {
        include("../templates/headadmin.php");

        echo "<h1 class=\"titre\">bienvenu sur la page admin</h1>";
        
       
    }else{
        echo "<h1 class=\"titre\">Les identifiant sont incorrecte</h1>";  
        
    }