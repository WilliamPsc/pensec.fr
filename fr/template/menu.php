<?php
$page = $baseURL . $_SERVER['PHP_SELF'];

$currPage = preg_replace("/\/fr\//", "/fr/", $page);

$newPageEn = preg_replace("/\/fr\//", "/en/", $page);

$newPageIt = preg_replace("/\/fr\//", "/it/", $page);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ps-4 align-items-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $baseURL . "/" . $langue . "/index" ?>">
            <img src="<?php echo $baseURL . "/logo/favicon-32x32.png" ?>" alt="Accueil" class="rounded-circle d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/index.php") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/index" ?>"><i class="bi bi-house me-1"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/cv.php") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/cv" ?>"><i class="fas fa-user-tie me-1"></i> Curriculum Vitae</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/enseignements.php") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/enseignements" ?>"><i class="fa-solid fa-building-columns me-1"></i> Université</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/conferences.php") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/conferences" ?>"><i class="fas fa-book-reader me-1"></i> Conférences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/publications.php") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/publications" ?>"><i class="fas fa-book me-1"></i> Publications</a>
                </li>
                <!-- <li class="navbar-brand">
                    <a href="<?php echo $baseURL . "/" . $langue . "/cours" ?>" style="color:white">Cours</a>
                </li> -->
                <!-- <li class="navbar-brand">
                    <a href="<?php echo $baseURL . "/" . $langue . "/students" ?>" style="color:white">Étudiants</a>
                </li> -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="langages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-fr me-2"></span> Français
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="langages">
                        <a class="dropdown-item" href="<?php echo $newPageEn ?>"><span class="flag-icon flag-icon-gb me-2"></span> English</a>
                        <!-- <a class="dropdown-item" href="<?php echo $newPageIt ?>"><span class="flag-icon flag-icon-it me-2"></span> Italiano</a> -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>