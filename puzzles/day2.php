<?php
require './classes/intcodecomputer.php';

$myfile = fopen("./inputs/day2.txt", "r") or die("Unable to open file!");
$string = '';
while(!feof($myfile)) {
    //call function with the input
    $string .= fgets($myfile);
}
$array = explode(',', $string);

$intcodeComputer = new IntcodeComputer(4);
print_r($intcodeComputer->interpretProgramme($array));
fclose($myfile);
