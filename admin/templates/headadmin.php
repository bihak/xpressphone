
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/acceuiladmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="image">
        <a href="../controleur/acceuille.php"><img src="../src/image/XPRESSPHONE1.png" alt=""></a>
    </div>
    <div id="mySidenav" class="sidenav">
    <a id="closeBtn" href="#" class="close">&times;</a>
            <ul>
                <li><a href="../controleur/option.php?var=ajou_client">Ajouter un client</a></li>
                <li><a href="../controleur/option.php?var=sup_client">Supprimer un client</a></li>
                <li><a href="../controleur/option.php?var=ajou_repa">Ajouter une reparation</a></li>
                <li><a href="../controleur/option.php?var=sup_repa">Archiver une reparation</a></li>
                <li><a href="../controleur/option.php?var=ajou_marque">Ajouter un marque</a></li>
                <li><a href="../controleur/option.php?var=ajou_vente">Ajouter une vente</a></li>
                <li><a href="../controleur/option2.php?var=aute">Autre</a></li>
            </ul>
    </div>
    
    <div class="box">
        <a href="#" id="openBtn">
        <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
        </a> 
    </div>
    
    <script type="text/javascript" src="../src_js/scripthead.js"></script>
</body>
</html>