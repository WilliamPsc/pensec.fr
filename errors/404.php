<?php
/* PARTIE BASIQUE */

$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($langue == "it") {
    include "../it/template/header.php";
    include "../it/template/menu.php";
} elseif ($langue == "fr") {
    include "../fr/template/header.php";
    include "../fr/template/menu.php";
} else {
    include "../en/template/header.php";
    include "../en/template/menu.php";
}
?>

<br><br>
<div class="container">
    <?php
    $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($langue == "it") {
        echo "<h1>Errore 404</h1>";
    } elseif ($langue == "fr") {
        echo "<h1>Erreur 404</h1>";
    } else {
        echo "<h1>Error 404</h1>";
    }
    ?>
    <img src="../assets/img/404.png" class="img-fluid rounded mx-auto d-block" alt="Error 404">
    <br />
    <br />
    <br />
</div>

<?php
if ($langue == "it") {
    include "../it/template/footer.php";
} elseif ($langue == "fr") {
    include "../fr/template/footer.php";
} else {
    include "../en/template/footer.php";
}
?>