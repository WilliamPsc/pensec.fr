<?php
include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container text-justify my-4">
    <h2><i class="fa-solid fa-book-journal-whills"></i> List of attended conferences:</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/conferences.json");

        // Decode JSON
        $json_conferences = json_decode($json, true);

        // Init variables
        $activityDetails = [];

        // Function to format dates in English
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
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Start</th>
                                <th style="text-align: center;">End</th>
                                <th style="text-align: center;">Location</th>
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
    <h2><i class="fa-solid fa-calendar-check"></i> Events organisation:</h2>
    <ul>
        <li>
            <strong><a href="http://cascade-conference.org/index.html" target="_blank" style="text-decoration: none;">CASCADE</a></strong> - Assistance with the CASCADE 2025 conference - Saint-Étienne, France
        </li>
        <li>
            <strong><a href="https://project.inria.fr/chairaml/summer-school-on-embedded-signal-processing-and-machine-learning-for-edge-intelligence/" target="_blank" style="text-decoration: none;">AMLE Summer School</a></strong> - Participation in the organisation of the AMLE 2022 Summer School - Lorient, France
        </li>
    </ul>
</div>

<div class="container text-justify">
    <hr>
    <h2><i class="fa-solid fa-calendar-check"></i> Scientific events:</h2>
    <ul>
        <li>
            <strong>Seminar of pre-entry in the ADAC team (LIRMM)</strong> - Presentation of my research work (PhD and postdoc) - Montpellier - July 09, 2025
            <a href="../assets/pdf/presentations/2025_07_09_ADAC_seminar.pdf" target="_blank" style="text-decoration: none;">
                <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
            </a>
        </li>
        <li>
            <strong>Seminar at LIRMM</strong> - Presentation of my PhD thesis - Montpellier (France) - January 07, 2025
            <a href="../assets/pdf/presentations/Seminaire_Montpellier_janvier_2025.pdf" target="_blank" style="text-decoration: none;">
                <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
            </a>
        </li>
        <li>
            <strong>My Thesis in 180s (MT180)</strong> - Participation in the regional final - Rennes (France) - March 14, 2023
            <a href="https://youtu.be/m_whL8xGbMQ" target="_blank" style="text-decoration: none;">
                <i class="fab fa-youtube" style="margin-left: 10px; color: red;"></i>
            </a>
        </li>
    </ul>
    <details>
        <summary class="text-center">Video of MT180 (in French)</summary>
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/m_whL8xGbMQ" title="William PENSEC - Finale régionale Bretagne - MT180 2023" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </details>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>