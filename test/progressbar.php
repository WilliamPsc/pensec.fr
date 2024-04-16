<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Progress Bar</title>
    <style>
        #progress-bar {
            width: 100%;
            background-color: #f3f3f3;
        }

        #progress-bar-fill {
            height: 30px;
            background-color: #4caf50;
            text-align: center;
            line-height: 30px;
            color: white;
        }
    </style>
</head>

<body>

    <?php
    // Set your start and end dates here
    $start_date = strtotime("2024-04-01");
    $end_date = strtotime("2024-08-31");

    // Get current date
    $current_date = time();

    // Calculate progress
    $total_days = $end_date - $start_date;
    $current_days = $current_date - $start_date;
    $progress_percentage = ($current_days / $total_days) * 100;
    ?>

    <div id="progress-bar">
        <div id="progress-bar-fill" style="width: <?php echo $progress_percentage; ?>%;">
            <?php echo round($progress_percentage, 2); ?> %
        </div>
    </div>

    <script>
        // You can add additional JavaScript functionalities here if needed
    </script>

</body>

</html>