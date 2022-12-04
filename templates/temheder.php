<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/nav.css">
    <link rel="stylesheet" href="./src/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>navbar</title>
</head>
<body>
    <div class="box">
            <a href="./index.php"><img class="xpressphone" src="./image/XPRESSPHONE.png" alt=""></a>
            <a href="./index.php"><img class="xpressphone" src="../image/XPRESSPHONE.png" alt=""></a>
            <form class="formulair" action="http://localhost/php/xpressphone/admin/index.php" method="post">
                <button class="admin">Admin</button>
            </Form>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">XPRESSPHONE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/php/xpressphone">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/php/xpressphone/controleur/repa.php?var=rep">Reparation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/php/xpressphone/controleur/contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>