<?php

//this is the main entry of the application

//autoloading implementation - autoloading all classes from all files
spl_autoload_register(function($className){
    include $className. '.php';
});



$mary = new WomenFashion();
//calling welcomeMessage from the parent class Welcome
echo $mary->welcomeMessage('Women');
echo '<br />..........................................................<br />';
$mary -> setCore(50, 60);
$mary -> setShoulder(45);
$mary -> setWaist(45);

echo $mary -> getCore();
echo "<br />";

echo $mary -> getShoulder();
echo "<br />";

echo $mary -> getWaist();
echo "<br />";

echo $mary -> Bye();
echo "<br /><br /><br />";



$john = new MenFashion();
//calling welcomeMessage from the parent class Welcome
echo $mary->welcomeMessage('Men');
echo '<br />...........................................................<br />';
$john -> setCore(70, 80);
$john -> setBiceps(28);

echo $john -> getCore();
echo "<br />";

echo $john -> getBiceps();
echo "<br />";

echo $john -> Bye();
echo "<br />";

?>


