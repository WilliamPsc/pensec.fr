<?php
$page = $_SESSION['baseURL'] . $_SERVER['PHP_SELF'];

$currPage = preg_replace("/\/fr\//", "/fr/", $page);

$newPageEn = preg_replace("/\/fr\//", "/en/", $page);

$newPageIt = preg_replace("/\/fr\//", "/it/", $page);
?>

<style>
    .custom-nav-link {
        color: #ffffff !important;
        /* White color for nav links */
        transition: color 0.3s ease;
        /* Smooth transition for hover effect */
    }

    .custom-nav-link:hover {
        color: #adb5bd !important;
        /* Light gray color on hover */
    }

    .custom-nav-link i {
        color: #ffffff !important;
        /* White color for icons */
    }

    .custom-nav-link:hover i {
        color: #adb5bd !important;
        /* Light gray color for icons on hover */
    }

    .dropdown-menu {
        background-color: #343a40 !important;
        /* Dark background for dropdown menu */
    }

    .dropdown-item {
        color: #ffffff !important;
        /* White color for dropdown items */
    }

    .dropdown-item:hover {
        background-color: #495057 !important;
        /* Darker background on hover */
        color: #ffffff !important;
        /* White color for dropdown items on hover */
    }

    .active {
        font-weight: bold !important;
        color: #4da1ff !important;
    }

    .active:hover {
        color: #1a75ff !important;
    }

    .active i {
        color: #4da1ff !important;
    }

    .active:hover i {
        color: #1a75ff !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ps-4 align-items-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/index.php" ?>">
            <img src="<?php echo $_SESSION['baseURL'] . "/logo/favicon-32x32.png" ?>" alt="Accueil" class="rounded-circle d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/index.php") ? 'active' : ''; ?>" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/index.php" ?>"><i class="bi bi-house me-1"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/cv.php") ? 'active' : ''; ?>" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/cv.php" ?>"><i class="fas fa-user-tie me-1"></i> Curriculum Vitae</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/enseignements.php") ? 'active' : ''; ?>" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/enseignements.php" ?>"><i class="fa-solid fa-building-columns me-1"></i> Université</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/conferences.php") ? 'active' : ''; ?>" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/conferences.php" ?>"><i class="fas fa-book-reader me-1"></i> Conférences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/publications.php") ? 'active' : ''; ?>" href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/publications.php" ?>"><i class="fas fa-book me-1"></i> Publications</a>
                </li>
                <!-- <li class="navbar-brand">
                    <a href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/cours.php" ?>" style="color:white">Cours</a>
                </li> -->
                <!-- <li class="navbar-brand">
                    <a href="<?php echo $_SESSION['baseURL'] . "/" . $_SESSION['language'] . "/students.php" ?>" style="color:white">Étudiants</a>
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