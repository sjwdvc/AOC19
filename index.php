<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AOC</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    require './classes/spaceship.php';
    require './classes/module.php';
    require './classes/intcodecomputer.php';


    echo 'Dag 1 output: ';
    include('./puzzles/day1.php');
    echo '<br><br>';

    echo 'Dag 2 output: ';
    include('./puzzles/day2.php');
    echo '<br><br>';

    echo 'Dag 2_2 output: ';
    include('./puzzles/day2_2.php');
    echo '<br><br>';

?>


<script src="js/script.js"></script>
</body>
</html>