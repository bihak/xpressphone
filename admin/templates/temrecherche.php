<link rel="stylesheet" href="../src/option2.css">
<div class="container">
<div class="tableaux">
<?php
    if ($_GET['var']=='client') {
?>  
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
    for ($i=0; $i < count($listeclients) ; $i++) { 
?>
    
   <tr>
       <td class="contenue"><?=$listeclients[$i][2]?></td>
       <td class="contenue"><?=$listeclients[$i][3]?></td>
       <td class="contenue"><?=$listeclients[$i][4]?></td>
       <td class="contenue"><?=$listeclients[$i][5]?></td>
       <td class="contenue"><?=$listeclients[$i][6]?></td>
       <td class="contenue"><?=$listeclients[$i][9]?></td>
   </tr>
<?php
}
}
?>
</table>

<?php
    if ($_GET['var']=='repa') {
?>  
<h1 class="titre">Liste des clients</h1>
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
    for ($i=0; $i < count($listerepa) ; $i++) { 
?>
    
   <tr>
       <td class="contenue"><?=$listerepa[$i][9]?></td>
       <td class="contenue"><?=$listerepa[$i][10]?></td>
       <td class="contenue"><?=$listerepa[$i][6]?></td>
       <td class="contenue"><?=$listerepa[$i][18]?></td>
       <td class="contenue"><?=$listerepa[$i][3]?></td>
       <td class="contenue"><?=$listerepa[$i][5]?></td>
   </tr>
<?php
}
}
?>
</table>
</div>
</div>
