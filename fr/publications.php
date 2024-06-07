<?php
// $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// if ($langue == "it") {
//     header("Location : https://www.pensec.fr/it/publications.php");
// } elseif ($langue != "fr") {
//     header("Location : https://www.pensec.fr/en/publications.php");
// }

include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container text-justify">
    <h2><i class="fa-solid fa-book"></i> Publications scientifiques</h2>
    <hr>

    <h3>Liste des articles : </h3>
    <?php
    // Read JSON file
    $json = file_get_contents("../assets/json/fr/publications.json");

    //Decode JSON
    $json_publications = json_decode($json, true);

    // Display content
    echo "\t<div class=\"text-justify\">\n";
    echo "\t\t<ul>\n";
    foreach ($json_publications as $key => $value) {
        // Display HTML
        echo "\t\t\t<li><strong>" . $key . "</strong>\n";
        echo "\t\t\t\t<ul>\n";
        foreach ($value as $keyArray => $valuesArray) {
            if ($valuesArray['subject'] == "paper") {
                // Init variables
                $strAuthors = "";
                $strKeyWords = "";
                $publish = "";
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

                $publisher = $valuesArray['publisher'];
                if ($publisher == "riscv") {
                    $publish = "<img src=\"../assets/img/publishers/riscv.svg\" height=\"30\" style=\"margin-right: 5px;\"></img> ";
                } else if ($publisher == "ieee") {
                    $publish = "<i class=\"ai ai-ieee ai-2x\" alt=\"ieee\"></i> ";
                } else if ($publisher == "acm") {
                    $publish = "<i class=\"ai ai-acm ai-2x\" alt=\"acm\"></i> ";
                } else if ($publisher == "hal") {
                    $publish = "<i class=\"ai ai-hal ai-2x\"></i> ";
                } else {
                }

                echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
                    $publish . $strAuthors . ", " . "<u data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"top\" title=\"" . $valuesArray['abstract'] . "\">" .
                    $valuesArray['titre'] . "</u>" . ", " .
                    $valuesArray['booktitle'] .
                    " (" . $valuesArray['acronyme'] . "), " .
                    $valuesArray['location'] . ", " .
                    $valuesArray['month'] . ", " .
                    "<a target='_blank' href='" . $valuesArray['doi'] . "'>" . $valuesArray['doi'] . "</a>\n";
                echo "\t\t\t\t\t</li>\n";
            }
        }
        echo "\t\t\t\t</ul>\n";
        echo "\t\t\t</li>\n";
    }
    echo "\t\t</ul>\n";
    echo "\t</div>";
    ?>

    <hr>
    <h3>Liste des présentations orales : </h3>
    <?php
    echo "TODO <br/>";
    ?>

    <hr>
    <h3>Liste des posters : </h3>
    <?php
    // Read JSON file
    $json = file_get_contents("../assets/json/fr/publications.json");

    //Decode JSON
    $json_publications = json_decode($json, true);

    // Display content
    echo "\t<div class=\"text-justify\">\n";
    echo "\t\t<ul>\n";
    foreach ($json_publications as $key => $value) {
        // Display HTML
        echo "\t\t\t<li><strong>" . $key . "</strong>\n";
        echo "\t\t\t\t<ul>\n";
        foreach ($value as $keyArray => $valuesArray) {
            if ($valuesArray['subject'] == "poster") {
                // Init variables
                $strAuthors = "";
                $strKeyWords = "";
                $publish = "";
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

                $publisher = $valuesArray['publisher'];
                if ($publisher == "riscv") {
                    $publish = "<img src=\"../assets/img/publishers/riscv.svg\" height=\"10\" style=\"margin-right: 5px;\"></img> ";
                } else if ($publisher == "ieee") {
                    $publish = "<img src=\"../assets/img/publishers/ieee.svg\" height=\"10\" style=\"margin-right: 5px;\"></img> ";
                } else if ($publisher == "acm") {
                    $publish = "<img src=\"../assets/img/publishers/acm.svg\" height=\"10\" style=\"margin-right: 5px;\"></img> ";
                } else if ($publisher == "hal") {
                    $publish = "<img src=\"../assets/img/publishers/hal.svg\" height=\"20\" style=\"margin-right: 5px;\"></img> ";
                } else {}

                echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
                    $publish . $strAuthors . ", " . "<u data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"top\" title=\"" . $valuesArray['abstract'] . "\">" .
                    $valuesArray['titre'] . "</u>" . ", " .
                    $valuesArray['booktitle'] .
                    " (" . $valuesArray['acronyme'] . "), " .
                    $valuesArray['location'] . ", " .
                    $valuesArray['month'] . ", " .
                    "<a target='_blank' href='" . $valuesArray['doi'] . "'>" . $valuesArray['doi'] . "</a>\n";
                echo "\t\t\t\t\t</li>\n";
            }
        }
        echo "\t\t\t\t</ul>\n";
        echo "\t\t\t</li>\n";
    }
    echo "\t\t</ul>\n";
    echo "\t</div>";
    ?>

    <!-- <hr> -->
    <!-- <h3>Divers : </h3>
    <?php
    echo "TODO";
    ?> -->
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>