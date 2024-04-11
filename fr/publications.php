<?php
/* PARTIE BASIQUE & française */

$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($langue == "it") {
    header("Location : https://www.pensec.fr/it/publications.php");
} elseif ($langue != "fr") {
    header("Location : https://www.pensec.fr/en/publications.php");
}

include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container text-justify">
    <h2>Publications scientifiques</h2>
    <!-- Possibilité d'automatiser via IEEE et API -->
    <?php
    echo "<hr>\n\t";
    ?>
    <h3>Liste des publications : </h3>

    <?php
    // Read JSON file
    $json = file_get_contents($_SESSION['baseURL'] . "fileData/json/fr/publications.json");

    //Decode JSON
    $json_publications = json_decode($json, true);

    // Init variables

    // Display content
    echo "\t<div class=\"text-justify\">\n";
    echo "\t\t<ul>\n";
    foreach ($json_publications as $key => $value) {

        // Display HTML
        echo "\t\t\t<li><strong>" . $key . "</strong>\n";
        echo "\t\t\t\t<ul>\n";
        foreach ($value as $keyArray => $valuesArray) {
            // Init variables
            $strAuthors = "";
            $strKeyWords = "";
            for ($i = 0; $i < count($valuesArray['author']); $i++) {
                if ($i == count($valuesArray['author']) - 2) {
                    $strAuthors .= $valuesArray['author'][$i] . ' and ';
                } else if ($i == count($valuesArray['author']) - 1) {
                    $strAuthors .= $valuesArray['author'][$i];
                } else {
                    $strAuthors .= $valuesArray['author'][$i] . ', ';
                }
            }

            for ($i = 0; $i < count($valuesArray['keywords']); $i++) {
                if ($i == count($valuesArray['keywords']) - 2) {
                    $strKeyWords .= $valuesArray['keywords'][$i] . ' and ';
                } else if ($i == count($valuesArray['keywords']) - 1) {
                    $strKeyWords .= $valuesArray['keywords'][$i];
                } else {
                    $strKeyWords .= $valuesArray['keywords'][$i] . ', ';
                }
            }

            echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
                $strAuthors . ", " .
                $valuesArray['titre'] . ", " .
                $valuesArray['booktitle'] .
                " (" . $valuesArray['acronyme'] . "), " .
                $valuesArray['month'] . ", " .
                "<a target='_blank' href='" . $valuesArray['doi'] . "'>" . $valuesArray['doi'] . "</a>, " .
                $strKeyWords . "\n";
            echo "\t\t\t\t\t\t<ul>\n";
            echo "\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t" . $valuesArray['abstract'] . "\n\t\t\t\t\t\t\t</li>\n";
            echo "\t\t\t\t\t\t</ul>\n";
            echo "\t\t\t\t\t</li>\n";
        }
        echo "\t\t\t\t</ul>\n";
        echo "\t\t\t</li>\n";
    }
    echo "\t\t</ul>\n";
    echo "\t</div>";
    ?>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>