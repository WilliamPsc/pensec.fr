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
        ['name' => 'Introduction - Context', 'written' => true, 'readVianney' => true, 'readGuy' => false, 'validated' => false],
        ['name' => 'Introduction - Objectives', 'written' => true, 'readVianney' => true, 'readGuy' => false, 'validated' => false],
        ['name' => 'Introduction - Outline', 'written' => true, 'readVianney' => true, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - Introduction', 'written' => true, 'readVianney' => true, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - IFT - Different types of IFT', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - IFT - Different levels of DIFT', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - IFT - How hardware DIFT work', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - PA - RE', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - PA - SCA', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - PA - FIA', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'SoA - Countermeasures against FIA', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - D-RI5CY - ISA', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - D-RI5CY - DIFT design', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - D-RI5CY - Case study', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - Use cases - BO', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - Use cases - FS', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - Vulnerability Assessment - Fault model', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - Vulnerability Assessment - BO', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - Vulnerability Assessment - FS', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - Vulnerability Assessment - CC', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'DRISCY - Summary', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - SoA Tools', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - FISSA - Software Archi', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - FISSA - Supported FM', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - FISSA - TCL Gen', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - FISSA - FI Sim', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - FISSA - Analyser', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - FISSA - Extending', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - Use case - Configuration', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - Use case - Experimental results', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - Discussion', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'FISSA - Summary', 'written' => true, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Countermeasures Implem - Fault model', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Countermeasures Implem - Simple parity', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Countermeasures Implem - HC', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Countermeasures Implem - Summary', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - FM', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - HC - 2', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - HC - 3', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - HC - 4', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - HC - 5', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - SD - 1', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - SD - 2', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - SD - 3', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - SD - 4', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - SD - 5', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - Discussion', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Evaluation of countermeasures - Summary', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Conclusion - Synthesis', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
        ['name' => 'Conclusion - Perspectives', 'written' => false, 'readVianney' => false, 'readGuy' => false, 'validated' => false],
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

    <h5>Écriture</h5>
    <div class="progress">
        <div class="progress-bar <?php echo $progressBarColorClassWritten; ?>" id="progressFill" style="width: <?php echo $progressWrittenPercentage; ?>%">
            <?php echo round($progressWrittenPercentage); ?>%
        </div>
    </div>
    <br>
    <h5>Relecture Vianney</h5>
    <div class="progress">
        <div class="progress-bar <?php echo $progressBarColorClassVianney; ?>" id="progressFill" style="width: <?php echo $progressVianneyPercentage; ?>%">
           <?php echo round($progressVianneyPercentage); ?>%
        </div>
    </div>
    <br>
    <h5>Relecture Guy</h5>
    <div class="progress">
        <div class="progress-bar <?php echo $progressBarColorClassGuy; ?>" id="progressFill" style="width: <?php echo $progressGuyPercentage; ?>%">
            <?php echo round($progressGuyPercentage); ?>%
        </div>
    </div>
    <br>
    <h5>Validation</h5>
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