<?php

class Palindrome
{
    function check($string)
    {
        $newString = str_replace(' ', '', $string);
        return ($newString == strrev($newString)) ? "Palindrome" : "Not Palindrome";
    }
}

$palindrome = new Palindrome();

if (isset($_GET['text'])) {
    $palindrome->check($_GET['text']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Palindrome Checker</h2>
    <form method="get">
        <label>Input Text: </label>
        <input type="text" name="text">
        <button type="submit">check</button>
    </form>

    <p>Output: </p>
    <?php
    if (isset($_GET['text'])) {
        echo "<p>" . $palindrome->check($_GET['text']) . "</p>";
    }
    ?>
</body>

</html>