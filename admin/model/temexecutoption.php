<?php
    if ($_GET['prodId'] == 'ajou_client') {
    $nouvauxclient=$_GET;
    $nom=$nouvauxclient['nom'];
    $prenom=$nouvauxclient['prenom'];
    $adress= $nouvauxclient['adresse'];
    $cnx->exec("alter table client auto_increment = 0");
    $cnx->exec("INSERT INTO `client`(`Nom_client`, `Prenom_client`, `Adersse`, `Email`,`Numero_telephone`, `Num_tva`, `Num_siret`, `Id_type_client`) 
    VALUES ('$nom','$prenom','$adress','$nouvauxclient[mail]','$nouvauxclient[tel]','$nouvauxclient[tva]','$nouvauxclient[siret]',$nouvauxclient[type_client])");  
?>
    <h1> le client a bien été rajouté</h1>
<?php
    }else
    if ($_GET['prodId'] == 'sup_client') {
    $supclient=$_GET;
    $cnx->exec("DELETE FROM `client` WHERE Id_client = $supclient[client]");  
?>
    <h1> le client a bien été Suprimmer</h1>
<?php
}else
if ($_GET['prodId'] == 'ajou_repa') {
    $ajouclient=$_GET;
    $model = addslashes($ajouclient['model']);
    $prix = addslashes($ajouclient['prix']);
    $des_repa = addslashes($ajouclient['descriptif']);
    $cnx->exec("alter table materiel_reparation auto_increment = 0");
    $cnx->exec("INSERT INTO `materiel_reparation`(`Model_repa`,`Prix_repa`,`Descriptif`, `Date_reparation`, `Id_client`, `Id_type`, `Id_marque`) 
    VALUES ('$model','$prix','$des_repa','$ajouclient[date]','$ajouclient[client]','$ajouclient[type]','$ajouclient[marque]')");  
?>
    <h1> La reparation a bien été ajouter</h1>
<?php
}else
if ($_GET['prodId'] == 'arch_repa') {
    $archirepa=$_GET;
    $cnx->exec("UPDATE `materiel_reparation` SET `Repa_fini`= 1 WHERE 	Id_materiel_repa = $archirepa[repa]");  
?>
    <h1> Archivage reussi</h1>
<?php
}else
if ($_GET['prodId'] == 'ajou_marque') {
    $ajoumarque=$_GET;
    $marque = addslashes($ajoumarque['marque']);
    $code = addslashes($ajoumarque['code']);
    $cnx->exec("alter table marque auto_increment = 0");
    $cnx->exec("INSERT INTO `marque`(`Code_marque`, `Marque`) VALUES ('$code','$marque')");  
?>
    <h1> Ajout reussi</h1>
<?php
}else
if ($_GET['prodId'] == 'ajou_vente') {
    $ajouvente=$_GET;
    $model = addslashes($ajouvente['model']);
    $prix = addslashes($ajouvente['prix']);
    $cnx->exec("alter table vente auto_increment = 0");
    $cnx->exec("INSERT INTO `vente`(`Model_vente`, `Image_materiel_vente`,`Prix_vente`, `Id_type_vente`, `Id_marque`, `Id_client`) 
    VALUES ('$model','$ajouvente[image]','$prix','$ajouvente[type_vente]','$ajouvente[marque]','2')");  
?>
    <h1> Ajout reussi</h1>
<?php
}
?>

