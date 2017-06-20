<?php

use Fashions\Material;
use Fashions\MenFashion;
use Fashions\TailoringCost;
use Fashions\WomenFashion;

//autoloading implementation - autoloading all classes from all files
function __autoload($class_name) {
    $filename = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    if(file_exists($filename)) {
        require_once($filename);
    } else {
        throw new Exception("Unable to load $filename.");
    }
}

$obj1 = new WomenFashion();

echo $obj1->welcomeMessage('Women');

echo '<hr>';
//calling welcomeMessage from the parent class Welcome
$obj1->setFashion('sattin', 'red', 'Home dress');
echo $obj1->getFashion();

echo '<hr>';
echo '<strong><i><u>Measurement details</u></i></strong>';
echo '<br />';
$obj1 -> setMeasurements(50, 60);
$obj1 -> setShoulder(45);
$obj1 -> setWaist(45);

echo $obj1 -> getMeasurements();
echo "<br />";

echo $obj1 -> getShoulder();
echo "<br />";

echo $obj1 -> getWaist();
echo "<br /><br /><br />";

echo $obj1 -> Bye();
echo "<br /><br />";

echo '<hr>';
$obj2 = new MenFashion();
//calling welcomeMessage from the parent class Welcome
echo $obj2->welcomeMessage('Men');

echo '<hr>';
//calling welcomeMessage from the parent class Welcome
$obj2->setFashion('Kitenge', 'Blue', 'Fancy suit');
echo $obj2->getFashion();

echo '<hr>';
echo '<strong><i><u>Measurement details</u></i></strong>';
echo '<br />';
$obj2 -> setMeasurements(70, 80);
$obj2 -> setBiceps(28);

echo $obj2 -> getMeasurements();
echo "<br />";

echo $obj2 -> getBiceps();
echo "<br />";

echo "<br /><br />";
echo $obj2 -> Bye();
echo "<br />";
echo '<hr>';

//Calling the Price trait in the TailoringCost class
$trait1 = new TailoringCost();

$trait1->setPrice('Kitenge', 4, 2500);
echo $trait1->getPrice();
echo "<br />";

echo $trait1->costIncurred(4500);
echo "<br />";

echo '<hr>';
//Calling the Price trait in the Material class
$trait2 = new Material();
echo "<br />";

$trait2->setPrice('Silk', 6, 8000);
echo $trait2->getPrice();
echo "<br />";
echo $trait2->importedFrom('China');