<?php
/* PARTIE BASIQUE */

include "template/header.php";
include "template/menu.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tables = document.querySelectorAll('.equal-columns');
        tables.forEach(table => {
            const columnCount = table.querySelector('thead tr').children.length;
            table.style.setProperty('--column-count', columnCount);
        });
    });
</script>

<br><br>
<div class="container">
    <h2><i class="fas fa-chalkboard-teacher me-1"></i> Enseignements</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/cours.json");

        //Decode JSON
        $json_data = json_decode($json, true);

        // Init variables
        $totalHoursByType = ['CM' => 0, 'TD' => 0, 'TP' => 0, 'Gestion' => 0];
        $totalHoursByYear = [];
        $totalHours = 0;
        $activityDetails = [];

        // Compute values
        foreach ($json_data as $year => $activities) {
            foreach ($activities as $activity) {
                $type = $activity['type'];
                $nbHeures = $activity['nbHeures'];
                $annee = $activity['anneeFR'];
                $idName = $activity['idName'];
                $name = $activity['nameFR'];

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

                // Store detailed activity info
                $activityDetails[$year][] = [
                    'type' => $type,
                    'annee' => $annee,
                    'idName' => $idName,
                    'name' => $name,
                    'nbHeures' => $nbHeures
                ];
            }
        }
        ?>

        <h4>Récapitulatif</h4>
        <table class="table table-striped table-hover equal-columns">
            <thead>
                <tr>
                    <th>Année</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totalHoursByYear as $year => $hours) : ?>
                    <tr>
                        <td><?php echo $year . " - " . ($year + 1); ?></td>
                        <td><?php echo $hours . " h"; ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th>Nombre total d'heures :</th>
                    <td><?php echo $totalHours . " h"; ?></td>
                </tr>
            </tbody>
        </table>

        <hr>
        <table class="table table-striped table-hover equal-columns">
            <thead>
                <tr>
                    <th>Type d'enseignement</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totalHoursByType as $type => $hours) : ?>
                    <?php if ($hours != 0) { ?>
                        <tr>
                            <td><?php echo $type; ?></td>
                            <td><?php echo $hours . " h"; ?></td>
                        </tr>
                    <?php } ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4>Détails :</h4>
        <?php foreach ($activityDetails as $year => $activities) : ?>
            <ul>
                <li>
                    <h5 style="display: inline;"><?php echo $year; ?></h5>
                    <h5 style="display: inline;"> / <?php echo $totalHoursByYear[$year] . " h :"; ?></h5>
                </li>
            </ul>
            <div class="table-container">
                <table class="table table-striped table-hover equal-columns">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Promotion</th>
                            <th>Nom</th>
                            <th>Intitulé</th>
                            <th>Nombre d'heures</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($activities as $activity) : ?>
                            <tr>
                                <td><?php echo $activity['type']; ?></td>
                                <td><?php echo $activity['annee']; ?></td>
                                <td><?php echo $activity['idName']; ?></td>
                                <td><?php echo $activity['name']; ?></td>
                                <td><?php echo $activity['nbHeures']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<br><br>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>