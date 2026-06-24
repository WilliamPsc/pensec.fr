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

<style>
    .year-block {
        margin-bottom: 15px;
        border-left: 4px solid #f5f5f5;
        padding-left: 10px;
    }

    .year-block summary:hover {
        background: #e9ecef;
        border-left: 4px solid #e9ecef;
    }


    .year-block summary {
        list-style: none;
        cursor: pointer;
        font-size: 1.2rem;
        padding: 8px;
        background-color: #f5f5f5;
        border-radius: 6px;
    }

    .year-block summary::-webkit-details-marker {
        display: none;
    }

    /* Ajoute un bullet */
    .year-block summary::before {
        content: "• ";
        font-size: 1.3em;
    }

    /* Optionnel : changer le bullet quand ouvert */
    .year-block[open] summary::before {
        content: "◦ ";
    }

    .year-block[open] summary {
        margin-bottom: 10px;
    }

    .table-container {
        margin-top: 10px;
        animation: fade 0.25s ease;
    }

    @keyframes fade {
        from {
            opacity: 0;
            transform: translateY(-5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h4, h5 {
        display: inline !important;
    }
</style>

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
        $eqTD = [];
        $totalHours = 0;
        $totalHeqTD = 0;
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
                    $eqTD[$year] = 0;
                }
                $totalHoursByYear[$year] += $nbHeures;
                if ($type == "CM") $eqTD[$year] += ($nbHeures * 1.5);
                else $eqTD[$year] += $nbHeures;

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
            $totalHeqTD += $eqTD[$year];
        }
        ?>

        <h3>Récapitulatif</h3>
        <table class="table table-striped table-hover equal-columns">
            <thead>
                <tr>
                    <th>Année</th>
                    <th>Total</th>
                    <th>Total eq TD</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totalHoursByYear as $year => $hours) : ?>
                    <tr>
                        <td><?php echo $year . " - " . ($year + 1); ?></td>
                        <td><?php echo $hours . " h"; ?></td>
                        <td><?php echo $eqTD[$year] . " h"; ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th>Nombre total d'heures :</th>
                    <td><strong><?php echo $totalHours . " h"; ?></strong></td>
                    <td><strong><?php echo $totalHeqTD . " h"; ?></strong></td>
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

        <h3>Détails :</h3>
        <?php foreach ($activityDetails as $year => $activities) : ?>
            <details class="year-block">

                <summary>
                    <h4>
                        <?php echo $year . " / " . $totalHoursByYear[$year] . " h - "; ?>
                    </h4>
                    <h5>
                        <?php  echo "(". $eqTD[$year] . " h eq TD)" ?>
                    </h5>
                </summary>

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
                                    <td><?= htmlspecialchars($activity['type']) ?></td>
                                    <td><?= strip_tags($activity['annee'], '<sup>') ?></td>
                                    <td><?= htmlspecialchars($activity['idName']) ?></td>
                                    <td><?= htmlspecialchars($activity['name']) ?></td>
                                    <td><?= htmlspecialchars($activity['nbHeures']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </details>
            <!-- <ul>
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
            </div> -->
        <?php endforeach; ?>
    </div>
</div>

<br><br>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>