<?php
$myfile = fopen("./inputs/day2_2.txt", "r") or die("Unable to open file!");
$string = '';
while(!feof($myfile)) {
    //call function with the input
    $string .= fgets($myfile);
}
fclose($myfile);
$array = explode(',', $string);

$intcodeComputer = new IntcodeComputer(4);
$result = $intcodeComputer->interpretProgrammeWithExpectedResult($array, 19690720);
if($result){
    print_r(100 * $result[0] + $result[1]);
}
else{
    echo 'Geen geldidge combinatie gevonen';
}
