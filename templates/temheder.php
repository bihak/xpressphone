
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../src/header.css">
    <title>heder</title>
</head>
<body>
    <div class="cont">
        <div class="images">
            <a class="image" href="../controleur/acceuille.php"><img src="admin/src/image/XPRESSPHONE1.png" alt=""></a>
        </div>
        <div>
            <form class="recherche" action="admin/index.php" method="get">
                <button type="submit">Admin</button>
            </form>  
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand">Xpressphone</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse3">
                <div class="navbar-nav">
                    <a href="./index.php" class="nav-item nav-link active">Accueil</a>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="repa.php?var=rep" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Réparations
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="/php/xpressphone/controleur/repa.php?var=smar" class="dropdown-item" href="#"><?= $reparation[0][0] ?></a></li>
                            <li><a href="/php/xpressphone/controleur/repa.php?var=tab" class="dropdown-item" href="#"><?= $reparation[1][0] ?></a></li>
                            <li><a href="/php/xpressphone/controleur/repa.php?var=ord" class="dropdown-item" href="#"><?= $reparation[2][0] ?></a></li>
                            <li><a href="/php/xpressphone/controleur/repa.php?var=jeux" class="dropdown-item" href="#"><?= $reparation[3][0] ?></a></li> 
                            <li><a href="/php/xpressphone/controleur/repa.php?var=autre" class="dropdown-item" href="#">Autres</a></li>
                        </ul>
                        </li>
                    <a href="/php/xpressphone/controleur/contact.php?var=cont" class="nav-item nav-link">Contact</a>
                </div>
                <form class="d-flex ms-auto">
                    <input type="text" class="form-control me-sm-2" placeholder="Search">
                    <button type="submit" class="btn btn-outline-light">Search</button>
                </form>
            </div>
        </div>        
    </nav>
</body>
</html>
