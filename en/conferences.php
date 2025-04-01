<?php
include "template/header.php";
include "template/menu.php";
?>

<style>
    .year-heading {
        margin-top: 20px;
        color: blue;
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table-container {
        margin-top: 10px;
        margin-bottom: 20px;
    }

    table a {
        color: black;
        text-decoration: none;
    }

    table a:hover {
        text-decoration: underline;
    }

    .custom-table th:first-child,
    .custom-table td:first-child {
        width: 50%;
    }

    .custom-table th:not(:first-child),
    .custom-table td:not(:first-child) {
        width: calc(50% / 3);
    }

    .bordered-table th,
    .bordered-table td {
        border: 1px solid #dee2e6;
    }
</style>

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
<div class="container text-justify my-4">
    <h2><i class="fa-solid fa-book-journal-whills"></i> List of conferences attended :</h2>
    <div class="table-responsive-md">
        <hr>
        <?php
        // Read JSON file
        $json = file_get_contents("../assets/json/conferences.json");

        // Decode JSON
        $json_conferences = json_decode($json, true);

        // Init variables
        $activityDetails = [];

        // Function to format dates in english
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
    <h2><i class="fa-solid fa-calendar-check"></i> Scientific events:</h2>
    <ul>
        <li>
            <strong>Seminar at LIRMM</strong> - Presentation of my thesis work - Montpellier - 07/01/2025
            <a href="../assets/presentations/Seminaire_Montpellier_janvier_2025.pdf" target="_blank" alt="Diapositives de la soutenance" style="text-decoration: none;">
                <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
            </a>
        </li>
    </ul>
    <ul>
        <li><strong>My Thesis in 180s (MT180)</strong> - Participation in the regional final - Rennes (France) - 14/03/2023
            <a href="https://youtu.be/m_whL8xGbMQ" target="_blank" alt="Vidéo YouTube de la soutenance" style="text-decoration: none;">
                <i class="fab fa-youtube" style="margin-left: 10px; color: red;"></i>
            </a>
    </ul>
    <details>
        <summary class="text-center">Video of MT180 (in French)</summary>
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/m_whL8xGbMQ" title="William PENSEC - Finale régionale Bretagne - MT180 2023" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </details>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>