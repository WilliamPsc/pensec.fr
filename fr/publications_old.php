<?php

include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container text-justify">
    <h2><i class="fa-solid fa-book"></i> Publications scientifiques</h2>
    <hr>

    <!-- TODO: refactoriser ça et écrire les publications à la main avec les liens des pdfs à mettre dans assets/articles/ et les référencer dans google (sitemap.xml) -->

    <h3>Récompenses : </h3>
    <div class="text-justify">
        <ul>
            <li><strong>2023</strong></li>
            <ul>
                <li>
                    <strong style="display: inline;">Prix du meilleur article : </strong>
                    <a href="https://sensorssp.github.io/sensorssp23/program/" target="_blank" style="font-size: medium;">The International Workshop on Security and Privacy of Sensing Systems</a><p style="display: inline;font-size: medium;"> - Novembre 2023</p>
                </li>
            </ul>
        </ul>
    </div>

    <hr>
    <h3>Liste des articles de conférences : </h3>
    <?php
    // Read JSON file
    $json = file_get_contents("../assets/json/publications.json");

    //Decode JSON
    $json_publications = json_decode($json, true);

    // Display content
    echo "\t<div class=\"text-justify\">\n";
    echo "\t\t<ul>\n";
    foreach ($json_publications as $key => $value) {
        $filtered_values = count(array_filter($value, function ($value) {
            return $value['subject'] == 'paper';
        }));
        // Display HTML
        if ($filtered_values != 0) {
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
                        $publish = "<img src=\"../assets/img/publishers/riscv.svg\" height=\"20\" style=\"margin-right: 5px;\"></img> ";
                    } else if ($publisher == "ieee") {
                        $publish = "<i class=\"ai ai-ieee ai-2x\" alt=\"ieee\"></i> ";
                    } else if ($publisher == "acm") {
                        $publish = "<i class=\"ai ai-acm ai-2x\" alt=\"acm\"></i> ";
                    } else if ($publisher == "hal") {
                        $publish = "<i class=\"ai ai-hal ai-2x\"></i> ";
                    } else {
                    }

                    $month_of_publications = str_replace(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], $valuesArray['month']);

                    echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
                        $strAuthors . ", " . "<u data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"top\" title=\"" . $valuesArray['abstract'] . "\">" .
                        $valuesArray['titre'] . "</u>" . ", " .
                        $valuesArray['booktitle'] .
                        " (" . $valuesArray['acronyme'] . "), " .
                        $valuesArray['location'] . ", " .
                        $month_of_publications . ", " .
                        "<a target='_blank' href='" . $valuesArray['doi'] . "'>" . $publish . "</a>\n";
                    echo "\t\t\t\t\t</li>\n";
                }
            }
            echo "\t\t\t\t</ul>\n";
            echo "\t\t\t</li>\n";
        }
    }
    echo "\t\t</ul>\n";
    echo "\t</div>";
    ?>

    <?php
    foreach ($json_publications as $key => $value) {
        $filtered_values = count(array_filter($value, function ($value) {
            return $value['subject'] == 'journal';
        }));
    }
    if ($filtered_values != 0) {
        echo "<hr>";
        echo "<h3>Liste des articles de journaux : </h3>";
    }
    // Read JSON file
    $json = file_get_contents("../assets/json/publications.json");

    //Decode JSON
    $json_publications = json_decode($json, true);

    // Display content
    echo "\t<div class=\"text-justify\">\n";
    echo "\t\t<ul>\n";

    if ($filtered_values != 0) {
        foreach ($json_publications as $key => $value) {
            // Display HTML
            echo "\t\t\t<li><strong>" . $key . "</strong>\n";
            echo "\t\t\t\t<ul>\n";
            foreach ($value as $keyArray => $valuesArray) {
                if ($valuesArray['subject'] == "journal") {
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
                    } else {
                    }

                    $month_of_publications = str_replace(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], $valuesArray['month']);

                    echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
                        $strAuthors . ", " . "<u data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"top\" title=\"" . $valuesArray['abstract'] . "\">" .
                        $valuesArray['titre'] . "</u>" . ", " .
                        $valuesArray['booktitle'] .
                        " (" . $valuesArray['acronyme'] . "), " .
                        $valuesArray['location'] . ", " .
                        $month_of_publications . ", " .
                        "<a target='_blank' href='" . $valuesArray['doi'] . "'>" . $publish . "</a>\n";
                    echo "\t\t\t\t\t</li>\n";
                }
            }
            echo "\t\t\t\t</ul>\n";
            echo "\t\t\t</li>\n";
        }
    }
    echo "\t\t</ul>\n";
    echo "\t</div>";
    ?>

    <hr>
    <h3>Liste des présentations orales : </h3>
    <?php
    // Read JSON file
    $json = file_get_contents("../assets/json/publications.json");

    //Decode JSON
    $json_publications = json_decode($json, true);

    // Display content
    echo "\t<div class=\"text-justify\">\n";
    echo "\t\t<ul>\n";
    foreach ($json_publications as $key => $value) {
        $filtered_values = count(array_filter($value, function ($value) {
            return $value['subject'] == 'presentation';
        }));
        // Display HTML
        if ($filtered_values != 0) {
            echo "\t\t\t<li><strong>" . $key . "</strong>\n";
            echo "\t\t\t\t<ul>\n";
            foreach ($value as $keyArray => $valuesArray) {
                if ($valuesArray['subject'] == "presentation") {
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
                    } else {
                    }

                    $month_of_publications = str_replace(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], $valuesArray['month']);

                    echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
                        $strAuthors . ", " . "<u data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"top\" title=\"" . $valuesArray['abstract'] . "\">" .
                        $valuesArray['titre'] . "</u>" . ", " .
                        $valuesArray['booktitle'] .
                        " (" . $valuesArray['acronyme'] . "), " .
                        $valuesArray['location'] . ", " .
                        $month_of_publications . ", " .
                        "<a target='_blank' href='" . $valuesArray['doi'] . "'>" . $publish . "</a>\n";
                    echo "\t\t\t\t\t</li>\n";
                }
            }
            echo "\t\t\t\t</ul>\n";
            echo "\t\t\t</li>\n";
        }
    }
    echo "\t\t</ul>\n";
    echo "\t</div>";
    ?>

    <hr>
    <h3>Liste des posters : </h3>
    <?php
    // Read JSON file
    $json = file_get_contents("../assets/json/publications.json");

    //Decode JSON
    $json_publications = json_decode($json, true);

    // Display content
    echo "\t<div class=\"text-justify\">\n";
    echo "\t\t<ul>\n";
    foreach ($json_publications as $key => $value) {
        $filtered_values = count(array_filter($value, function ($value) {
            return $value['subject'] == 'poster';
        }));
        // Display HTML
        if ($filtered_values != 0) {
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
                    } else {
                    }

                    $month_of_publications = str_replace(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], $valuesArray['month']);

                    echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
                        $strAuthors . ", " . "<u data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"top\" title=\"" . $valuesArray['abstract'] . "\">" .
                        $valuesArray['titre'] . "</u>" . ", " .
                        $valuesArray['booktitle'] .
                        " (" . $valuesArray['acronyme'] . "), " .
                        $valuesArray['location'] . ", " .
                        $month_of_publications . ", " .
                        "<a target='_blank' href='" . $valuesArray['doi'] . "'>" . $publish . "</a>\n";
                    echo "\t\t\t\t\t</li>\n";
                }
            }
            echo "\t\t\t\t</ul>\n";
            echo "\t\t\t</li>\n";
        }
    }
    echo "\t\t</ul>\n";
    echo "\t</div>";
    ?>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>