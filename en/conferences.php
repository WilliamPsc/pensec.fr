<?php
// echo $_SESSION['language'];
?>
<!-- <h3>Liste des conférences assistées (non exhaustive) : </h3> -->
<?php
// Read JSON file
$json = file_get_contents($_SESSION['baseURL'] . "fileData/json/fr/conferences.json");

//Decode JSON
$json_conferences = json_decode($json, true);

// Display content
echo "\t<div class=\"text-justify\">\n";
echo "\t\t<ul>\n";
foreach ($json_conferences as $key => $value) {
    // Display HTML
    echo "\t\t\t<li><strong>" . $key . "</strong>\n";
    echo "\t\t\t\t<ul>\n";
    foreach ($value as $keyArray => $valuesArray) {
        // Init variables
        $strDate = "";

        // Gestion de la date
        $dateDebut = new DateTime($valuesArray['dateStart']);
        $dateFin = new DateTime($valuesArray['dateEnd']);
        $differenceDate = date_diff($dateDebut, $dateFin, true);
        $differenceDateJours = ((int) $differenceDate->format('%a')) + 1;
        $chgtMois = ((int)$dateFin->format('m') - (int)$dateDebut->format('m'));
        $formatter = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::MEDIUM, \IntlDateFormatter::MEDIUM);
        $formatter1 = new \IntlDateFormatter('fr_FR', \IntlDateFormatter::MEDIUM, \IntlDateFormatter::MEDIUM);

        if ($differenceDateJours == 1) {
            if((int)$dateDebut->format('d') == 1){
                $formatter->setPattern('MMMM');
                $strDate = "1<sup>er</sup> " . $formatter->format($dateDebut);
            } else{
                $formatter->setPattern('dd MMMM');
                $strDate = $formatter->format($dateDebut);
            }
        } else if ($differenceDateJours == 2) {
            if ($chgtMois >= 1) {
                if ((int)$dateFin->format('d') == 1) {
                    $formatter->setPattern('dd MMMM');
                    $formatter1->setPattern('MMMM');
                    $strDate = $formatter->format($dateDebut) . " et " . "1<sup>er</sup> " . $formatter1->format($dateFin);
                } else {
                    $formatter->setPattern('dd MMMM');
                    $formatter1->setPattern('dd MMMM');
                    $strDate = $formatter1->format($dateDebut) . " et " . $formatter->format($dateFin);
                }
            } else {
                if ((int)$dateDebut->format('d') == 1) {
                    $formatter->setPattern('dd MMMM');
                    $strDate = "1<sup>er</sup> et " . $formatter->format($dateFin);
                } else {
                    $formatter->setPattern('dd MMMM');
                    $formatter1->setPattern('dd');
                    $strDate = $formatter1->format($dateDebut) . " et " . $formatter->format($dateFin);
                }
            }
        } else {
            if ($chgtMois >= 1) {
                if ((int)$dateDebut->format('d') == 1) {
                    $formatter->setPattern('MMMM');
                    $formatter1->setPattern('dd MMMM');
                    $strDate = "1<sup>er</sup> " . $formatter->format($dateDebut) . $formatter1->format($dateFin);
                } else {
                    if ((int)$dateFin->format('d') == 1) {
                        $formatter->setPattern('dd MMMM');
                        $formatter1->setPattern('MMMM');
                        $strDate = $formatter->format($dateDebut) . " au " . "1<sup>er</sup> " . $formatter1->format($dateFin);
                    } else {
                        $formatter->setPattern('dd MMMM');
                        $formatter1->setPattern('dd MMMM');
                        $strDate = $formatter1->format($dateDebut) . " au " . $formatter->format($dateFin);
                    }
                }
            } else {
                if ((int)$dateDebut->format('d') == 1) {
                    $formatter->setPattern('dd MMMM');
                    $strDate = "1<sup>er</sup> au " . $formatter->format($dateFin);
                } else {
                    $formatter->setPattern('dd MMMM');
                    $formatter1->setPattern('dd');
                    $strDate = $formatter1->format($dateDebut) . " au " . $formatter->format($dateFin);
                }
            }
        }

        echo "\t\t\t\t\t<li>\n\t\t\t\t\t\t" .
            "<strong>" . $valuesArray['name'] . "</strong> - " .
            $strDate . " - " .
            $valuesArray['place'] . " - " .
            "<a target='_blank' href='" . $valuesArray['link'] . "'>Lien</a>" .
            "\n\t\t\t\t\t</li>\n";
    }
    echo "\t\t\t\t</ul>\n";
    echo "\t\t\t</li>\n";
}
echo "\t\t</ul>\n";
echo "\t</div>";
?>