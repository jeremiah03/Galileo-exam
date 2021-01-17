<?php

class TextReverse
{
    public function reverseText($string)
    {
        return strrev($string);
    }
}
$reverse = new TextReverse();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Text Reverser</h1>
    <form method="get">

        <label>Input Text</label>
        <input type="text" name="text" required>

        <button type="submit">Compute</button>
    </form>

    <p>Output:</p>
    <?php
    if (isset($_GET['text'])) {
        echo $reverse->reverseText($_GET['text']);
    }
    ?>
</body>

</html>