<?php
$page = $baseURL . $_SERVER['REQUEST_URI'];
$page = str_replace('.php', '', $page);

$currPage = preg_replace("/\/en\//", "/en/", $page);

// ----------------------------------------------------------
$newPageFr = preg_replace("/\/en\//", "/fr/", $page);
if(str_contains($newPageFr, "research")) {
    $newPageFr = str_replace("research", "recherche", $newPageFr);
}
if(str_contains($newPageFr, "university")) {
    $newPageFr = str_replace("university", "universite", $newPageFr);
}
// ----------------------------------------------------------
$newPageIt = preg_replace("/\/en\//", "/it/", $page);
if(str_contains($newPageIt, "research")) {
    $newPageIt = str_replace("research", "ricerca", $newPageIt);
}
if(str_contains($newPageIt, "university")) {
    $newPageIt = str_replace("university", "universita", $newPageIt);
}
// ----------------------------------------------------------
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ps-4 align-items-bottom">
    <div class="container-fluid">
        <a class="nav-item" href="<?php echo $baseURL . "/" . $langue . "/index" ?>">
            <img src="<?php echo $baseURL . "/logo/favicon-32x32.png" ?>" alt="Accueil" class="rounded-circle d-inline-block align-top me-1">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/index") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/index" ?>"><i class="bi bi-house me-1"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/cv") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/cv" ?>"><i class="fas fa-user-tie me-1"></i> Curriculum Vitae</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/university") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/university" ?>"><i class="fa-solid fa-building-columns me-1"></i> University</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/research") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/research" ?>"><i class="fa-solid fa-microscope me-1"></i> Research</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/lessons") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/lessons" ?>"><i class="fa-solid fa-chalkboard-user me-1"></i> Teachings</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/conferences") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/conferences" ?>"><i class="fas fa-book-reader me-1"></i> Conferences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fs-5 <?php echo ($currPage == $baseURL . "/" . $langue . "/publications") ? 'active' : ''; ?>" href="<?php echo $baseURL . "/" . $langue . "/publications" ?>"><i class="fas fa-book me-1"></i> Publications</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item drop dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="langages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-gb me-2"></span> English
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="langages">
                        <a class="dropdown-item" href="<?php echo $newPageFr ?>"><span class="flag-icon flag-icon-fr me-2"></span> Français</a>
                        <!-- <a class="dropdown-item" href="<?php echo $newPageIt ?>"><span class="flag-icon flag-icon-it me-2"></span> Italiano</a> -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>