<?php
    /* PARTIE BASIQUE */

    // $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    // if ($langue == "it") {
    //     header("Location : https://www.pensec.fr/it/index.php");
    // }elseif($langue != "fr"){
    //     header("Location : https://www.pensec.fr/en/index.php");
    // }

    include "template/header.php";
    include "template/menu.php";
    ?>

    <br><br>
    <div class="container">
        <h1 style="text-align:center; color: red;">Lavori in corso</h1>
    </div>

    <?php
    $dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
    include "template/footer.php";
    ?>