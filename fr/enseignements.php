<?php
/* PARTIE BASIQUE */

include "template/header.php";
include "template/menu.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<br><br>
<div class="container">
    <h2><i class="fas fa-chalkboard-teacher"></i> Enseignements (TPs et TDs)</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/fr/cours.json");

        //Decode JSON
        $json_data = json_decode($json, true);

        // Init variables
        $totalHoursByType = ['CM' => 0, 'TD' => 0, 'TP' => 0];
        $totalHoursByYear = [];
        $totalHours = 0;

        // Compute values

        foreach ($json_data as $year => $activities) {
            foreach ($activities as $activity) {
                $type = $activity['type'];
                $nbHeures = $activity['nbHeures'];

                // Update total hours by type
                if (isset($totalHoursByType[$type])) {
                    $totalHoursByType[$type] += $nbHeures;
                }

                // Update total hours by year
                if (!isset($totalHoursByYear[$year])) {
                    $totalHoursByYear[$year] = 0;
                }
                $totalHoursByYear[$year] += $nbHeures;

                // Update overall total hours
                $totalHours += $nbHeures;
            }
        }

        // Display content
        echo "<div class=\"text-justify\">\n";
        echo "\t\t\t<ul>\n";
        foreach ($json_data as $key => $value) {
            // Init variables
            $nbHeures = 0;

            // Display HTML
            echo "\t\t\t\t<li><strong>" . $key . " - " . (((int)$key) + 1) . "</strong> : ";
            echo "\t\t\t\t\t<ul>\n";
            foreach ($value as $keyArray => $valuesArray) {
                echo "\t\t\t\t\t\t<li>" . $valuesArray['type'] . " - " . $valuesArray['anneeFR'] . " : " . $valuesArray['idName'] . " - " . $valuesArray['nameFR'] . " - " . $valuesArray['nbHeures'] . "h</li>\n";
            }
            echo "\t\t\t\t\t</ul>\n\t\t\t\t</li>\n";
        }
        echo "\t\t\t</ul>\n";
        echo "\t\t</div>\n";
        ?>

        <hr>
        <h4>Récapitulatif</h4>
        <!-- <h5>Nombre total d'heures par type :</h5> -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Type d'enseignement</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totalHoursByType as $type => $hours) : ?>
                    <tr>
                        <td><?php echo $type; ?></td>
                        <td><?php echo $hours . " h"; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <hr>
        <!-- <h5>Nombre total d'heures par année:</h5> -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Année</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totalHoursByYear as $year => $hours) : ?>
                    <tr>
                        <td><?php echo $year . " - " . $year + 1; ?></td>
                        <td><?php echo $hours . " h"; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <th>Nombre total d'heures :</th>
                    <td><?php echo $totalHours . " h"; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<br><br>
<div class="container">
    <h2><i class="fas fa-vote-yea"></i> Représentant universitaire :</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/fr/delegue.json");

        //Decode JSON
        $json_data = json_decode($json, true);

        // Init variables
        function formatDate($dateString)
        {
            $date = DateTime::createFromFormat('Y-m', $dateString);
            return $date->format('F Y');
        }

        // Display content
        echo "<div class=\"text-justify\">\n";
        echo "\t\t\t<ul>\n";
        foreach ($json_data as $key => $value) {
            // Display HTML
            echo "\t\t\t\t<li><strong>" . $key . "</strong> : ";
            echo "\t\t\t\t\t<ul>\n";
            foreach ($value as $keyArray => $valuesArray) {
                // Init variables
                $formattedStartDate = formatDate($valuesArray['dateStart']);
                if ($valuesArray['dateEnd'] == "") {
                    $formattedEndDate = "";
                } else {
                    $formattedEndDate = formatDate($valuesArray['dateEnd']);
                }

                $formattedStartDateFrench = str_replace(
                    ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                    $formattedStartDate
                );

                $formattedEndDateFrench = str_replace(
                    ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                    $formattedEndDate
                );

                echo "\t\t\t\t\t\t<li><u>" . $valuesArray['nameFR'] . "</u> : $formattedStartDateFrench - $formattedEndDateFrench</li>\n";
            }
            echo "\t\t\t\t\t</ul>\n\t\t\t\t</li>\n";
        }
        echo "\t\t\t</ul>\n";
        echo "\t\t</div>\n";
        ?>
        <br><br><br><br><br><br>
    </div>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>