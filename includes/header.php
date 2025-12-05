<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio BTS SIO SISR - Ewen COSTE</title>

    <!--  Bootstrap (CDN) -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style.css -->
     <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">BTS SIO SISR . Ewen COSTE</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage=='about.php'){echo 'active';} ?>" href="about.php">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage=='journey.php'){echo 'active';} ?>" href="journey.php">Parcours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage=='projects.php'){echo 'active';} ?>" href="projects.php">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage=='veille.php'){echo 'active';} ?>" href="veille.php">Veille</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage=='contact.php'){echo 'active';} ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
        </div>
    </div>
</nav>