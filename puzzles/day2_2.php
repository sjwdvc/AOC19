<?php
$myfile = fopen("./inputs/day2_2.txt", "r") or die("Unable to open file!");
$string = '';
while(!feof($myfile)) {
    //call function with the input
    $string .= fgets($myfile);
}
$array = explode(',', $string);

$intcodeComputer = new IntcodeComputer(4);
$result = $intcodeComputer->interpretProgrammeWithExpectedResult($array, 19690720);
print_r(100 * $result[0] + $result[1]);
fclose($myfile);
