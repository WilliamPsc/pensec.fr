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
    <h2>Erreur 404</h2>
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