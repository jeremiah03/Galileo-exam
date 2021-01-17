<?php

class Fibonacci
{
    public function check($n)
    {
        $fibonacci = 5 * pow($n, 2) + 4;
        $fibonacci2 = 5 * pow($n, 2) - 4;

        $sqrtfibonacci = sqrt($fibonacci);
        $sqrtfibonacci2 = sqrt($fibonacci2);

        if ($sqrtfibonacci == floor($sqrtfibonacci) || $sqrtfibonacci2 == floor($sqrtfibonacci2)) {
            return $n . ' is a fibonacci number';
        } else {
            return $n . ' is not a fibonacci number';
        }
    }
}
$fibonacci = new Fibonacci();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>

<body>
    <h1>Fibonacci number checker</h1>
    <form method="get">
        <label>Input Number: </label>
        <input type="text" name="number">
        <button type="submit">Check</button>
    </form>
    <p>Output:
    </p>
    <?php
    if (isset($_GET['number'])) {
        echo $fibonacci->check($_GET['number']);
    }
    ?>
</body>

</html>