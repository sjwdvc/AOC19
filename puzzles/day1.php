<?php
require './classes/spaceship.php';
require './classes/module.php';

$myfile = fopen("./inputs/day1.txt", "r") or die("Unable to open file!");
$spaceship = new Spaceship("Santa's ship");
while(!feof($myfile)) {
    //call function with the input
    $module = new Module(fgets($myfile));
    $spaceship->addModule($module);
}
fclose($myfile);
$spaceship->calculateTotalFuelNeeded();
var_dump($spaceship->getTotalFuelNeeded());

