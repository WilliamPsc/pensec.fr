<?php
include "template/header.php";
include "template/menu.php";
?>

<br><br>

<div class="container text-justify my-4">
    <h2><i class="fa-solid fa-microchip text-primary me-2"></i><i class="fa-solid fa-lightbulb text-warning me-2"></i> Fields of research:</h2>
    <ul>
        <li>Hardware security.</li>
        <li>Physical attacks.</li>
        <li>Development of hardware countermeasures.</li>
        <li>Security of neural network implementations.</li>
    </ul>
</div>

<div class="container text-justify my-4">
    <hr>
    <h2><i class="fa-solid fa-list-check me-1"></i> Projects:</h2>
    <div class="table-responsive-md">
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/rs_projects.json");

        // Decode JSON
        $json_conferences = json_decode($json, true);

        // Init variables
        $activityDetails = [];

        // Function to format dates in French
        function formatDate($date)
        {
            $formatter = new IntlDateFormatter(
                'en_EN',
                IntlDateFormatter::LONG,
                IntlDateFormatter::NONE
            );
            $dateTime = new DateTime($date);
            return $formatter->format($dateTime);
        }

        // Compute values
        foreach ($json_conferences as $year => $activities) {
            foreach ($activities as $activity) {
                $acronyme = $activity['acronyme'];
                $name = $activity['name'];
                $start = $activity['dateStart'];
                $end = $activity['dateEnd'];
                $funding = $activity['funding'];
                $role = $activity['roleEN'];
                $url = $activity['link'];

                // Store detailed activity info
                $activityDetails[$year][] = [
                    'acronyme' => $acronyme,
                    'name' => $name,
                    'dateStart' => formatDate($start),
                    'dateEnd' => formatDate($end),
                    'funding' => $funding,
                    'role' => $role,
                    'url' => $url
                ];
            }
        }
        ?>

        <?php foreach ($activityDetails as $year => $activities) : ?>
            <div class="mb-4">
                <div class="table-container">
                    <table class="table table-striped table-hover">
                        <thead class="table">
                            <tr>
                                <th style="text-align: centre;">Acronym</th>
                                <th style="text-align: centre;">Period</th>
                                <th style="text-align: centre;">Funding</th>
                                <th style="text-align: centre;">Full name</th>
                                <th style="text-align: centre;">Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($activities as $activity) : ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo "<a target='_blank' href='" . $activity['url'] . "'>" .  $activity['acronyme'] . "</a>"; ?></td>
                                    <td style="text-align: center;"><?php echo $activity['dateStart'] . " - " . $activity['dateEnd']; ?></td>
                                    <td style="text-align: center;"><?php echo $activity['funding']; ?></td>
                                    <td style="text-align: center;"><?php echo $activity['name']; ?></td>
                                    <td style="text-align: center;"><?php echo $activity['role']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container text-justify my-4">
    <hr>
    <h2><i class="fa-solid fa-graduation-cap me-1"></i> PhD students under supervision:</h2>
    <ul>
        <li>
            <strong>Ali AIT HASSOU (september 2025 - )</strong>
            <p>
                <u>Title</u>: Design and Security of MRAM-Based RISC-V Microarchitectures: Vulnerability Analysis and Countermeasure Development.<br>
                <u>Co-supervision</u>: Florent BRUGUIER and Pascal BENOIT
            </p>
        </li>
    </ul>
</div>

<div class="container text-justify my-4">
    <hr>
    <h2><i class="fa-solid fa-graduation-cap me-1"></i> Bachelor's/Master's students supervised:</h2>
    <ul>
        <li>
            <strong>Kévin QUÉNÉHÉRVÉ (M1 CSSE UBS, 2022, 4 months)</strong>
            <p>
                <u>Title</u>: Development of a fault injection platform.<br>
                <u>Co-supervision</u>: Vianney LAPÔTRE
            </p>
        </li>
        <li>
            <strong>Souad ET-TABITY (M2 SESI UBS, 2022, 3 months)</strong>
            <p>
                <u>Title</u>: Integration of the D-RI5CY on FPGA.<br>
                <u>Co-supervision</u>: Vianney LAPÔTRE
            </p>
        </li>
    </ul>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>