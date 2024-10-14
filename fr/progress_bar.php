<?php
include "template/header.php";
include "template/menu.php";
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
        text-align: center;
    }

    .completed {
        background-color: #d4edda;
        text-align: center;
    }

    .not-completed {
        background-color: #f8d7da;
        text-align: center;
    }
</style>

<br><br>
<div class="container">
    <h2>Progrès du manuscrit</h2>

    <?php
    // Array of sections with their completion status
    $tasks = [
        ['name' => 'Chapitre 1 - Introduction - Context',                    'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 1 - Introduction - Objectives',                 'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 1 - Introduction - Outline',                    'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - Introduction',                        'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - IFT - How hardware DIFT works',       'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - IFT - Different types of IFT',        'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - IFT - Different levels of DIFT',      'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - PA - RE',                             'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - PA - SCA',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - PA - FIA',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - CM against FIA - Physical layer',     'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - CM against FIA - Software',           'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - CM against FIA - Hardware',           'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 2 - SoA - Summary',                             'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - Introduction',                              'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - D-RI5CY - ISA',                             'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - D-RI5CY - DIFT design',                     'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - D-RI5CY - Case study',                      'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - Use cases - BO',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - Use cases - FS',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - Use cases - Summary',                       'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - VA - Fault model',                          'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - VA - BO',                                   'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - VA - FS',                                   'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - VA - CC',                                   'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 3 - Summary',                                   'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - Introduction',                              'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - SoA Tools',                                 'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - FISSA - Software Archi',                    'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - FISSA - Supported FM',                      'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - FISSA - TCL Gen',                           'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - FISSA - FI Sim',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - FISSA - Analyser',                          'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - FISSA - Extending',                         'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - Use case - Configuration',                  'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - Use case - Experimental results',           'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - Discussion',                                'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 4 - Summary',                                   'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - Introduction',                              'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - Fault model',                               'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - Simple parity - Presentation',              'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - Simple parity - Implem',                    'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - HC - Presentation',                         'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - HC - Implementation',                       'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - SD - Presentation',                         'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - SD - Implementation',                       'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - Evaluation',                                'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 5 - Summary',                                   'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 6 - Introduction',                              'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - FM',                                        'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - Strategies - 2',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - Strategies - 3',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - Strategies - 4',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - Strategies - 5',                            'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - Experimental results',                      'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - Discussion',                                'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 6 - Summary',                                   'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => false],
        ['name' => 'Chapitre 7 - Conclusion - Synthesis',                    'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 7 - Conclusion - Perspectives',                 'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
        ['name' => 'Chapitre 8 - Publications',                              'written' => true, 'readVianney' => true, 'readGuy' => true, 'validated' => true],
    ];

    $writtenCount = 0;
    $readVianney = 0;
    $readGuy = 0;
    $validatedCount = 0;
    $totalTasks = count($tasks);

    foreach ($tasks as $task) {
        if ($task['written']) {
            $writtenCount++;
        }
        if ($task['readVianney']) {
            $readVianney++;
        }
        if ($task['readGuy']) {
            $readGuy++;
        }
        if ($task['validated']) {
            $validatedCount++;
        }
    }
    $progressWrittenPercentage = ($writtenCount / $totalTasks) * 100;
    $progressVianneyPercentage = ($readVianney / $totalTasks) * 100;
    $progressGuyPercentage = ($readGuy / $totalTasks) * 100;
    $progressValidatedPercentage = ($validatedCount / $totalTasks) * 100;

    // Define color scale based on progress range
    // Written
    $progressBarColorClassWritten = '';
    if ($progressWrittenPercentage < 25) {
        $progressBarColorClassWritten = 'bg-danger'; // Red
    } else if ($progressWrittenPercentage < 50) {
        $progressBarColorClassWritten = 'bg-warning'; // Orange
    } else if ($progressWrittenPercentage < 75) {
        $progressBarColorClassWritten = 'bg-info'; // Blue
    } else {
        $progressBarColorClassWritten = 'bg-success'; // Green
    }
    // Vianney
    $progressBarColorClassVianney = '';
    if ($progressVianneyPercentage < 25) {
        $progressBarColorClassVianney = 'bg-danger'; // Red
    } else if ($progressVianneyPercentage < 50) {
        $progressBarColorClassVianney = 'bg-warning'; // Orange
    } else if ($progressVianneyPercentage < 75) {
        $progressBarColorClassVianney = 'bg-info'; // Blue
    } else {
        $progressBarColorClassVianney = 'bg-success'; // Green
    }
    // Guy
    $progressBarColorClassGuy = '';
    if ($progressGuyPercentage < 25) {
        $progressBarColorClassGuy = 'bg-danger'; // Red
    } else if ($progressGuyPercentage < 50) {
        $progressBarColorClassGuy = 'bg-warning'; // Orange
    } else if ($progressGuyPercentage < 75) {
        $progressBarColorClassGuy = 'bg-info'; // Blue
    } else {
        $progressBarColorClassGuy = 'bg-success'; // Green
    }
    // Validated
    $progressBarColorClassValidated = '';
    if ($progressValidatedPercentage < 25) {
        $progressBarColorClassValidated = 'bg-danger'; // Red
    } else if ($progressValidatedPercentage < 50) {
        $progressBarColorClassValidated = 'bg-warning'; // Orange
    } else if ($progressValidatedPercentage < 75) {
        $progressBarColorClassValidated = 'bg-info'; // Blue
    } else {
        $progressBarColorClassValidated = 'bg-success'; // Green
    }
    ?>

    <h5>Écriture : <?php echo $writtenCount . " / " . $totalTasks; ?></h5>
    <div class="progress">
        <div class="progress-bar <?php echo $progressBarColorClassWritten; ?>" id="progressFill" style="width: <?php echo $progressWrittenPercentage; ?>%">
            <?php echo round($progressWrittenPercentage); ?>%
        </div>
    </div>
    <br>
    <h5>Relecture Vianney : <?php echo $readVianney . " / " . $totalTasks; ?></h5>
    <div class="progress">
        <div class="progress-bar <?php echo $progressBarColorClassVianney; ?>" id="progressFill" style="width: <?php echo $progressVianneyPercentage; ?>%">
           <?php echo round($progressVianneyPercentage); ?>%
        </div>
    </div>
    <br>
    <h5>Relecture Guy : <?php echo $readGuy . " / " . $totalTasks; ?></h5>
    <div class="progress">
        <div class="progress-bar <?php echo $progressBarColorClassGuy; ?>" id="progressFill" style="width: <?php echo $progressGuyPercentage; ?>%">
            <?php echo round($progressGuyPercentage); ?>%
        </div>
    </div>
    <br>
    <h5>Validation : <?php echo $validatedCount . " / " . $totalTasks; ?></h5>
    <div class="progress">
        <div class="progress-bar <?php echo $progressBarColorClassValidated; ?>" id="progressFill" style="width: <?php echo $progressValidatedPercentage; ?>%">
            <?php echo round($progressValidatedPercentage); ?>%
        </div>
    </div>
    <br>
    <table>
        <tr>
            <th>Sections names</th>
            <th>Written</th>
            <th>Read Vianney</th>
            <th>Read Guy</th>
            <th>Validated</th>
        </tr>
        <?php
        // $totalRows = max(count($tasks), count($tasks_validated));
        $totalRows = count($tasks);

        for ($i = 0; $i < $totalRows; $i++) {
            echo "<tr>";

            // Display task from the first array
            if (isset($tasks[$i])) {
                echo "<td>{$tasks[$i]['name']}</td>";
                echo "<td class='" . ($tasks[$i]['written'] ? "completed" : "not-completed") . "'>" .
                    ($tasks[$i]['written'] ? "&#10004;" : "&#10008;") .
                    "</td>";
                echo "<td class='" . ($tasks[$i]['readVianney'] ? "completed" : "not-completed") . "'>" .
                    ($tasks[$i]['readVianney'] ? "&#10004;" : "&#10008;") .
                    "</td>";
                echo "<td class='" . ($tasks[$i]['readGuy'] ? "completed" : "not-completed") . "'>" .
                    ($tasks[$i]['readGuy'] ? "&#10004;" : "&#10008;") .
                    "</td>";
                echo "<td class='" . ($tasks[$i]['validated'] ? "completed" : "not-completed") . "'>" .
                    ($tasks[$i]['validated'] ? "&#10004;" : "&#10008;") .
                    "</td>";
                echo "\n";
            } else {
                echo "<td></td><td></td><td></td><td></td>";
            }

            echo "</tr>";
        }
        ?>
    </table>

    <!-- <div class="checkbox-group">
        <?php foreach ($tasks as $task): ?>
            <label>
                <input type="checkbox" class="progress-checkbox" <?php echo $task['written'] ? 'checked' : ''; ?>>
                <?php echo $task['name']; ?>
            </label><br>
        <?php endforeach; ?>
    </div>
    <br> -->
    <br><br>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>