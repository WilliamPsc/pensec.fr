<?php
/* PARTIE BASIQUE & anglaise */

// $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// if ($langue == "fr") {
//     header("Location : https://www.pensec.fr/fr/publications.php");
// } elseif ($langue == "it") {
//     header("Location : https://www.pensec.fr/it/publications.php");
// }

include "template/header.php";
include "template/menu.php";
?>

<br /><br />
<div class="container">
    <h2>Scientific papers list and list of conferences I attended</h2>

    <?php
    include "../confpapers/conferences.php";
    echo "<hr/>";
    include "../confpapers/papers.php";
    ?>

</div>

<?php
include "template/footer.php";
?>