<?php
include "template/header.php";
include "template/menu.php";
?>

<style>
    .year-heading {
        margin-top: 20px;
        color: blue;
    }

    .table-container {
        margin-top: 10px;
    }

    table a {
        color: black;
        text-decoration: none;
    }

    table a:hover {
        text-decoration: underline;
    }

</style>

<br><br>
<div class="container text-justify my-4">
    <h2><i class="fa-solid fa-book-journal-whills"></i> Liste des conférences assistées :</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/fr/conferences.json");

        // Decode JSON
        $json_conferences = json_decode($json, true);

        // Init variables
        $activityDetails = [];

        // Function to format dates in French
        function formatDate($date) {
            $formatter = new IntlDateFormatter(
                'fr_FR',
                IntlDateFormatter::LONG,
                IntlDateFormatter::NONE
            );
            $dateTime = new DateTime($date);
            return $formatter->format($dateTime);
        }

        // Compute values
        foreach ($json_conferences as $year => $activities) {
            foreach ($activities as $activity) {
                $name = $activity['name'];
                $start = $activity['dateStart'];
                $end = $activity['dateEnd'];
                $location = $activity['place'];
                $url = $activity['link'];

                // Store detailed activity info
                $activityDetails[$year][] = [
                    'name' => $name,
                    'dateStart' => formatDate($start),
                    'dateEnd' => formatDate($end),
                    'place' => $location,
                    'url' => $url
                ];
            }
        }
        ?>

        <?php foreach ($activityDetails as $year => $activities) : ?>
            <div class="mb-4">
                <h5 class="year-heading"><?php echo $year; ?></h5>
                <div class="table-container">
                    <table class="table table-striped table-hover">
                        <thead class="table">
                            <tr>
                                <th style="text-align: center;">Nom</th>
                                <th style="text-align: center;">Début</th>
                                <th style="text-align: center;">Fin</th>
                                <th style="text-align: center;">Lieu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($activities as $activity) : ?>
                                <tr>
                                    <td style="text-align: left;"><?php echo "<a target='_blank' href='" . $activity['url'] . "'>" .  $activity['name'] . "</a>"; ?></td>
                                    <td style="text-align: center;"><?php echo $activity['dateStart']; ?></td>
                                    <td style="text-align: center;"><?php echo $activity['dateEnd']; ?></td>
                                    <td style="text-align: center;"><?php echo $activity['place']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container text-justify">
    <hr>
    <h2><i class="fa-solid fa-calendar-check"></i> Participation à des évènements scientifiques :</h2>

    <ul>
        <li><strong>Ma Thèse en 180s (MT180)</strong> - Participation à la finale régionale - Rennes - 14/03/2023
    </ul>
    <iframe width="1280" height="720" src="https://www.youtube.com/embed/m_whL8xGbMQ" title="William PENSEC - Finale régionale Bretagne - MT180 2023" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>