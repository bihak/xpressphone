<?php
        $conexion = $cnx->query('select * from admine');
        $donneeconexion = $conexion->fetchall(PDO::FETCH_OBJ);  
        session_start(); 
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];
        
?>