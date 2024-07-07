<?php
$page = $_SERVER['PHP_SELF'];

$currPage = preg_replace("/\/en\//", "", $page);

$newPageFr = ".." . preg_replace("/\/en\//", "/fr/", $page);

$newPageIt = ".." . preg_replace("/\/en\//", "/it/", $page);
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="index.php" style="color:white">Home</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="cv.php" style="color:white">CV</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="projets.php" style="color:white">Projects</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="enseignements.php" style="color:white">Teachings</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="publications.php" style="color:white">Scientific papers</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo $currPage ?>" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-gb"> </span> English</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="<?php echo $newPageFr ?>"><span class="flag-icon flag-icon-fr"> </span> Français</a>
                    <a class="dropdown-item" href="<?php echo $newPageIt ?>"><span class="flag-icon flag-icon-it"> </span> Italiano</a>
                </div>
            </li>
        </ul>
    </div>
</nav>