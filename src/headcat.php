<?php
include("Connect.php");
$repa_type = $cnx->query('SELECT Type_repa FROM `type_reparation`');
$reparation = $repa_type->fetchall();
?>