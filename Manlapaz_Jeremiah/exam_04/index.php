<?php 

class DateDiff {
    function diffDates($start, $end){
        $date1 = date_create_from_format('Y-m-d', $start);
        $date2 = date_create_from_format('Y-m-d', $end);
        $diff = $date1->diff($date2);
        // $diff = $diff->format('%y years %m months %a days %h hours %i minutes %s seconds');
        $diff = $diff->format('%y years, %m months, %d days');
        
        return $diff;
    }
}
$date = new DateDiff();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date diff</title> 
</head>
<body>
    <h1>Date Difference Calculator</h1>
    <p>Date Format should be Y-m-d</p>
    <form method="get">

        <label >Start Date</label>
        <input type="text" name="start_date" required>

        <label>End Date</label>
        <input type="text" name="end_date" required>

        <button type="submit">Compute</button>
    </form>
    <p>Output:</p>
    <?php 
        if(isset($_GET['start_date']) && isset($_GET['end_date'])){
            echo $date->diffDates($_GET['start_date'], $_GET['end_date']);
        }
    ?>
</body>
</html>

