<?php
// echo $_SESSION['language'];
?>
<!-- <h3>Liste des publications : </h3> -->

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
    // Init variables
    $strAuthors = "";
    $strKeyWords = "";

    // Display HTML
    echo "\t\t\t<li><strong>" . $key . "</strong>\n";
    echo "\t\t\t\t<ul>\n";
    foreach ($value as $keyArray => $valuesArray) {
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
            "<a target='_blank' href='" . $valuesArray['url'] . "'>" . $valuesArray['url'] . "</a>, " .
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