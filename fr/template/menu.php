<?php
$page = $_SESSION['baseURL'] . $_SERVER['PHP_SELF'];

$currPage = preg_replace("/\/fr\//", "/fr/", $page);

$newPageEn = preg_replace("/\/fr\//", "/en/", $page);

$newPageIt = preg_replace("/\/fr\//", "/it/", $page);
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top ps-4 align-items-bottom">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="navbar-brand">
                <img src="<?php echo $_SESSION['baseURL'] . "/logo/favicon-32x32.png" ?>" class="rounded-circle" alt="Accueil">
            </li>
            <li class="navbar-brand">
                <a href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/index.php" ?>" style="color:white"><i class="bi bi-house me-2"></i>Accueil</a>
            </li>
            <li class="navbar-brand">
                <a href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/cv.php" ?>" style="color:white">Curriculum vitae</a>
            </li>
            <!-- <li class="navbar-brand">
                <a href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/cours.php" ?>" style="color:white">Cours</a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle navbar-brand" href="<?php echo $currPage ?>" id="engagement" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Engagement scientifique et universitaire</a>
                <div class="dropdown-menu" aria-labelledby="engagement">
                    <a class="dropdown-item" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/enseignements.php" ?>"><i class="fa-solid fa-building-columns"></i> Université</a>
                    <a class="dropdown-item" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/conferences.php" ?>"><i class="fas fa-book-reader"></i> Conférences</a>
                    <a class="dropdown-item" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/publications.php" ?>"><i class="fas fa-book"></i> Publications</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo $currPage ?>" id="langages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-fr"></span> Français</a>
                <div class="dropdown-menu" aria-labelledby="langages">
                    <a class="dropdown-item" href="<?php echo $newPageEn ?>"><span class="flag-icon flag-icon-gb"> </span> English</a>
                    <a class="dropdown-item" href="<?php echo $newPageIt ?>"><span class="flag-icon flag-icon-it"> </span> Italiano</a>
                </div>
            </li>
        </ul>
    </div>
</nav>