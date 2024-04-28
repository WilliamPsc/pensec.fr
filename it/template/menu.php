<?php
$page = $_SERVER['PHP_SELF'];

$currPage = preg_replace("/(\/it\/)/i", "", $page);

$newPageFr = ".." . preg_replace("/(\/it)/i", "/fr", $page);

$newPageEn = ".." . preg_replace("/(\/it)/i", "/en", $page);
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/index.php"?>" style="color:white">Home</a>
            </li>
            <!-- <li class="nav-item">
                <a class="navbar-brand" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/cv.php"?>" style="color:white">CV</a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="navbar-brand" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/projets.php"?>" style="color:white">Progetti</a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/" . $currPage?>" id="engagement" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Impegno scientifico e accademico</a>
                <div class="dropdown-menu" aria-labelledby="engagement">
                    <a class="dropdown-item" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/enseignements.php"?>"><i class="fas fa-chalkboard-teacher"></i> Insegnamento</a>
                    <a class="dropdown-item" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/delegue.php"?>"><i class="fas fa-vote-yea"></i> Delegato</a>
                    <a class="dropdown-item" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/conferences.php"?>"><i class="fas fa-book-reader"></i> Conferenze</a>
                    <a class="dropdown-item" href="<?php echo $_SESSION['baseURL'] . $_SESSION['language'] . "/publications.php"?>"><i class="fas fa-book"></i> Pubblicazioni</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo $currPage?>" id="langages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-it"> </span>  Italiano</a>
                <div class="dropdown-menu" aria-labelledby="langages">
                    <a class="dropdown-item" href="<?php echo $newPageFr?>"><span class="flag-icon flag-icon-fr"> </span> Français</a>
                    <a class="dropdown-item" href="<?php echo $newPageEn?>"><span class="flag-icon flag-icon-gb"> </span> English</a>
                </div>
            </li>
        </ul>
    </div>
</nav>