<link rel="stylesheet" href="../src/styleadmin.css">
<?php
 session_start();  
if ($_GET['var'] == 'ajou_client') {
                $client = $cnx->query('select * from type_client');
                $listeclient = $client->fetchall(PDO::FETCH_OBJ);  
?>
        <div class="formulaire">
                <form action="../controleur/executeoption.php" method="get" id="myform" onsubmit='checkinput()'>
                    <h3>ajouter votre client</h3>
                    <input type="text" name="nom" id="nom" placeholder="Entrez le nom"  >
                    <span id="error"></span>
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez le prenom" >
                    <span id="error1"></span>
                    <input type="text" name="adresse" placeholder="Adresse">
                    <input type="text" name="mail" id="mail" placeholder="Email" >
                    <span id="error2"></span>
                    <input type="text" name="tel" id="num" placeholder="Numero de telephone" >
                    <span id="error3"></span>
                    <input id="prodId" name="prodId" type="hidden" value="ajou_client" >
                    <DIV class="BOX1">
                       <select name="type_client" id="type_client" required="required">
                                        <option value="">Choisissez une Categorie</option>
                                <?php
                                    foreach($listeclient as $resultat)
                                    {
                                ?>
                                        <option value="<?=$resultat->Id_type_client?>"><?=$resultat->Type_client?></option>
                                <?php
                                    }
                                ?>
                     </select> 
                    </DIV>
                    <input type="text" name="tva" id="tva" placeholder="Numero de tva">
                    <span id="error4"></span>
                    <input type="text" name="siret" id="siret" placeholder="Numero de siret">
                    
                    <input type="submit" value="Envoyer">
                </form>
        </div>

    
<?php
}else
if ($_GET['var'] == 'sup_client') {
                $client = $cnx->query('select * from client');
                $listeclient = $client->fetchall();  
?>
        <div class="formulaire">
                <form action="../controleur/executeoption.php" method="get" id="myform">
                    <h3>Suprimmer un client</h3>
                    <input id="prodId" name="prodId" type="hidden" value="sup_client" >
                    <DIV class="BOX1">
                       <select name="client" id="client" required="required">
                                        <option value="">Choisissez un client</option>
                                <?php
                                    for ($i=0;$i<count($listeclient);$i++){
                                ?>
                                        <option value="<?=$listeclient[$i][0]?>"><?=$listeclient[$i][1]." ".$listeclient[$i][2]?></option>
                                <?php
                                    }
                                ?>
                     </select> 
                    </DIV>
                    
                    <input type="submit" value="Envoyer">
                </form>
        </div>

    
<?php
}else
if ($_GET['var'] == 'ajou_repa') {
?>
<div class="formulaire">
    <form action="../controleur/executeoption.php" method="get" id="">
        <h3>Ajouter une reparation</h3>
<?php
    $client = $cnx->query('select * from client');
    $listeclient = $client->fetchall(); 
?> 
        <DIV class="BOX1">
                       <select name="client" id="client" required="required">
                                        <option value="">Choisissez un client</option>
                                <?php
                                    for ($i=0;$i<count($listeclient);$i++){
                                ?>
                                        <option value="<?=$listeclient[$i][0]?>"><?=$listeclient[$i][1]." ".$listeclient[$i][2]?></option>
                                <?php
                                    }
                                ?>
                     </select> 
        </DIV>
<?php
    $typerepa = $cnx->query('select * from type_materiel');
    $listetyperepa = $typerepa->fetchall(); 
?>
        <DIV class="BOX1">
                       <select name="type" id="type" required="required">
                                        <option value="">Choisissez type materiel de reparation</option>
                                <?php
                                    for ($i=0;$i<count($listetyperepa);$i++){
                                ?>
                                        <option value="<?=$listetyperepa[$i][0]?>"><?=$listetyperepa[$i][1]?></option>
                                <?php
                                    }
                                ?>
                     </select> 
        </DIV>
<?php
$repa = $cnx->query('SELECT * FROM marque');
$listerepa= $repa->fetchall(PDO::FETCH_OBJ);
?>  
        <DIV class="BOX1">
           <select name="marque" id="marque" required="required">
                            <option value="">Choisissez une marque</option>
                    <?php
                        foreach($listerepa as $resultat)
                        {
                    ?>
                            <option value="<?=$resultat->Id_marque?>"><?=$resultat->Marque?></option>
                    <?php
                        }
                    ?>
         </select> 
        </DIV>
        <input type="text" name="model" id="model" placeholder="Model" required >
        <span id="error"></span>
<?php
    $typerepa1 = $cnx->query('select * from type_reparation');
    $listetyperepa1 = $typerepa1->fetchall(); 
?>
        <DIV class="BOX1">
                       <select name="type_repa" id="type_repa" required="required">
                                        <option value="">Choisissez type de reparation</option>
                                <?php
                                    for ($i=0;$i<count($listetyperepa1);$i++){
                                ?>
                                        <option value="<?=$listetyperepa1[$i][0]?>"><?=$listetyperepa1[$i][1]?></option>
                                <?php
                                    }
                                ?>
                     </select> 
        </DIV>
        <input type="date" name="date" id="date" placeholder="date d'entrer" required>
        <span id="error1"></span>
        <input type="text" name="prix" placeholder="prix">
        <span id="error2"></span>
        <input id="prodId" name="prodId" type="hidden" value="ajou_repa" >
        <textarea name="descriptif" id="descriptif" cols="30" rows="10" placeholder="Descriptif de la panne"></textarea>
        <input type="submit" value="Envoyer">
        
    </form>
</div>


<?php
}else
if ($_GET['var'] == 'sup_repa') {
    $repa = $cnx->query('select * from materiel_reparation NATURAL JOIN client where Repa_fini = 0');
    $listerepa = $repa->fetchall();  
?>
<div class="formulaire">
    <form action="../controleur/executeoption.php" method="get" id="myform">
        <h3>Suprimmer un client</h3>
        <input id="prodId" name="prodId" type="hidden" value="arch_repa" >
        <DIV class="BOX1">
           <select name="repa" id="repa" required="required">
                            <option value="">Choisissez une reparation</option>
                    <?php
                        for ($i=0;$i<count($listerepa);$i++){
                    ?>
                            <option value="<?=$listerepa[$i][1]?>"><?=$listerepa[$i][10]." ".$listerepa[$i][9]." ".$listerepa[$i][2]?></option>
                    <?php
                        }
                    ?>
         </select> 
        </DIV>
        
        <input type="submit" value="Envoyer">
    </form>
</div>


<?php
}else
if ($_GET['var'] == 'ajou_marque') {
?>
<div class="formulaire">
    <form action="../controleur/executeoption.php" method="get" id="myform">
    <h3>Ajouter une marque</h3>
        <input id="prodId" name="prodId" type="hidden" value="ajou_marque" >
        <input type="text" name="marque" placeholder="Nom marque">
        <input type="text" name="code" placeholder="Nom code marque">
        <input type="submit" value="Envoyer">
    </form>
</div>
<?php
}else
if ($_GET['var'] == 'ajou_vente') {
    $marque = $cnx->query('select * from marque');
    $listemarque = $marque->fetchall();  
?>
<div class="formulaire">
    <form action="../controleur/executeoption.php" method="get" id="myform">
        <h3>Ajouter un model</h3>
        <input id="prodId" name="prodId" type="hidden" value="ajou_vente" >
<?php
        $typevente = $cnx->query('select * from type_vente');
        $listetypevente = $typevente->fetchall(); 
?>
        <DIV class="BOX1">
                       <select name="type_vente" id="type_repa" required="required">
                                        <option value="">Choisissez type de vente</option>
                                <?php
                                    for ($i=0;$i<count($listetypevente);$i++){
                                ?>
                                        <option value="<?=$listetypevente[$i][0]?>"><?=$listetypevente[$i][1]?></option>
                                <?php
                                    }
                                ?>
                     </select> 
        </DIV>
        <DIV class="BOX1">
           <select name="marque" id="marque" required="required">
                            <option value="">Choisissez une marque</option>
                    <?php
                        for ($i=0;$i<count($listemarque);$i++){
                    ?>
                            <option value="<?=$listemarque[$i][0]?>"><?=$listemarque[$i][2]?></option>
                    <?php
                        }
                    ?>
         </select> 
        </DIV>
        <input type="text" name="model" id="model" placeholder="Model" required >
        <input type="file" name="image" id="image" placeholder="Model" required >
        <input type="text" name="prix" placeholder="prix">

        
        <input type="submit" value="Envoyer">
    </form>
</div>


<?php
}
?>

<script src="../src_js/option.js"></script>