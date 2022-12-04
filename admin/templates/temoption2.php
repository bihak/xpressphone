<link rel="stylesheet" href="../src/option2.css">
<div class="container">
<div class="tableaux">
<?php
 session_start();  
 
if ($_GET['var']=='auter') {
?>
    <h1 class="titre">Gérer vos client et vas reparation</h1>
<?php
}else
if ($_GET['var']=='client') {
    $client = $cnx->query('select * from client NATURAL JOIN type_client');
    $listeclient = $client->fetchall(); 
?>
    <div>
        <form class="recherche" action="../controleur/recherche.php?var=client" method="post">
            <input type="text" name="recherche">
            <input type="submit" class="logoformulaire" value=" " name="submit">
        </form>  
    </div>
    <h1 class="titre">Liste des clients</h1>
    <table class="table">
   <tr>
       <th class="antaite">Nom</th>
       <th class="antaite">Prenom</th>
       <th class="antaite">Adresse</th>
       <th class="antaite">Email</th>
       <th class="antaite">Telephone</th>
       <th class="antaite">Type client</th>
   </tr>
<?php
    for ($i=0; $i < count($listeclient) ; $i++) { 
?>
    
   <tr>
       <td class="contenue"><?=$listeclient[$i][2]?></td>
       <td class="contenue"><?=$listeclient[$i][3]?></td>
       <td class="contenue"><?=$listeclient[$i][4]?></td>
       <td class="contenue"><?=$listeclient[$i][5]?></td>
       <td class="contenue"><?=$listeclient[$i][6]?></td>
       <td class="contenue"><?=$listeclient[$i][9]?></td>
   </tr>
<?php
}
?>
</table>
<?php
}else
if ($_GET['var']=='repa') {
    $repa = $cnx->query('SELECT * FROM `materiel_reparation` NATURAL JOIN `client` NATURAL JOIN `marque`');
    $listereparation = $repa->fetchall(); 
?>
    <div>
        <form class="recherche" action="../controleur/recherche.php?var=repa" method="POST">
            <input type="text" name="recherche">
            <input type="submit" class="logoformulaire" value=" " name="submit">
        </form>  
    </div>
    <h1 class="titre">Liste des reparation</h1>
    <table class="table">
   <tr>
       <th class="antaite">Nom</th>
       <th class="antaite">Prenom</th>
       <th class="antaite">Date d'entrer</th>
       <th class="antaite">Marque</th>
       <th class="antaite">Model</th>
       <th class="antaite">Prix</th>
   </tr>
<?php
    for ($i=0; $i < count($listereparation) ; $i++) { 
?>
    
   <tr>
       <td class="contenue"><?=$listereparation[$i][9]?></td>
       <td class="contenue"><?=$listereparation[$i][10]?></td>
       <td class="contenue"><?=$listereparation[$i][7]?></td>
       <td class="contenue"><?=$listereparation[$i][18]?></td>
       <td class="contenue"><?=$listereparation[$i][3]?></td>
       <td class="contenue"><?=$listereparation[$i][5]?></td>
   </tr>
<?php
}
?>
</table>
<?php
}else
if ($_GET['var']=='vente') {
    $vente = $cnx->query('SELECT * FROM `vente` NATURAL JOIN `marque` NATURAL JOIN `type_vente`');
    $listevente = $vente->fetchall(); 
?>
    <div>
        <form class="recherche" action="../controleur/recherche.php?var=vente" method="post">
            <input type="text" name="recherche">
            <input type="submit" class="logoformulaire" value=" " name="submit">
        </form>  
    </div>
    <h1 class="titre">Liste des reparation</h1>
    <table class="table">
   <tr>
       <th class="antaite">Mype</th>
       <th class="antaite">Marque</th>
       <th class="antaite">Model</th>
       <th class="antaite">prix</th>
   </tr>
<?php
    for ($i=0; $i < count($listevente) ; $i++) { 
?>
    
   <tr>
       <td class="contenue"><?=$listevente[$i][12]?></td>
       <td class="contenue"><?=$listevente[$i][10]?></td>
       <td class="contenue"><?=$listevente[$i][3]?></td>
       <td class="contenue"><?=$listevente[$i][6]?></td>
<?php
}
}
?>
</table>

</div>
</div>