<?php
include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container text-justify my-4">
    <h2><i class="fa-solid fa-book-journal-whills"></i> Liste des conférences assistées :</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/conferences.json");

        // Decode JSON
        $json_conferences = json_decode($json, true);

        // Init variables
        $activityDetails = [];

        // Function to format dates in French
        function formatDate($date)
        {
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
                    <table class="table table-striped table-hover custom-table">
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
                                    <td style="text-align: center;"><?php echo "<a target='_blank' href='" . $activity['url'] . "'>" .  $activity['name'] . "</a>"; ?></td>
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
    <h2><i class="fa-solid fa-calendar-check"></i> Organisations d'évènements :</h2>
    <ul>
        <li>
            <strong><a href="http://cascade-conference.org/index.html" target="_blank" style="text-decoration: none;">CASCADE</a></strong> - Aide au déroulement de la conférence CASCADE 2025 - Saint-Étienne
        </li>
        <li>
            <strong><a href="https://project.inria.fr/chairaml/summer-school-on-embedded-signal-processing-and-machine-learning-for-edge-intelligence/" target="_blank" style="text-decoration: none;">AMLE Summer School</a></strong> - Participation à l'organisation de l'école d'été AMLE 2022 - Lorient
        </li>
    </ul>
</div>

<div class="container text-justify">
    <hr>
    <h2><i class="fa-solid fa-calendar-check"></i> Évènements scientifiques :</h2>
    <ul>
        <li>
            <strong>Séminaire de pré-entrée dans l'équipe ADAC (LIRMM)</strong> - Présentation de mes travaux de recherche - Montpellier - 09/07/2025
            <a href="../assets/pdf/presentations/2025_07_09_ADAC_seminar.pdf" target="_blank" style="text-decoration: none;">
                <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
            </a>
        </li>
        <li>
            <strong>Séminaire au LIRMM</strong> - Présentation de mes travaux de thèse - Montpellier - 07/01/2025
            <a href="../assets/pdf/presentations/Seminaire_Montpellier_janvier_2025.pdf" target="_blank" style="text-decoration: none;">
                <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
            </a>
        </li>
        <li>
            <strong>Ma Thèse en 180s (MT180)</strong> - Participation à la finale régionale - Rennes - 14/03/2023
            <a href="https://youtu.be/m_whL8xGbMQ" target="_blank" style="text-decoration: none;">
                <i class="fab fa-youtube" style="margin-left: 10px; color: red;"></i>
            </a>
        </li>
    </ul>
    <details>
        <summary class="text-center">Vidéo de MT180s</summary>
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/m_whL8xGbMQ" title="William PENSEC - Finale régionale Bretagne - MT180 2023" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </details>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>