<form>
<?php

//this is the main entry of the application

//autoloading implementation - autoloading all classes from all files
spl_autoload_register(function($className){
    include $className. '.php';
});

$mary = new WomenFashion();

echo $mary->welcomeMessage('Women');

echo '<hr>';
//calling welcomeMessage from the parent class Welcome
$mary->setFashion('sattin', 'red', 'Home dress');
echo $mary->getFashion();

echo '<hr>';
echo '<strong><i><u>Measurement details</u></i></strong>';
echo '<br />';
$mary -> setCore(50, 60);
$mary -> setShoulder(45);
$mary -> setWaist(45);

echo $mary -> getCore();
echo "<br />";

echo $mary -> getShoulder();
echo "<br />";

echo $mary -> getWaist();
echo "<br /><br /><br />";

echo $mary -> Bye();
echo "<br /><br />";


echo '<hr>';
$john = new MenFashion();
//calling welcomeMessage from the parent class Welcome
echo $mary->welcomeMessage('Men');

echo '<hr>';
//calling welcomeMessage from the parent class Welcome
$mary->setFashion('Kitenge', 'Blue', 'Fancy suit');
echo $mary->getFashion();

echo '<hr>';
echo '<strong><i><u>Measurement details</u></i></strong>';
echo '<br />';
$john -> setCore(70, 80);
$john -> setBiceps(28);

echo $john -> getCore();
echo "<br />";

echo $john -> getBiceps();
echo "<br />";

echo "<br /><br />";
echo $john -> Bye();
echo "<br />";
echo '<hr>';

//Calling the Price trait in the MenTrait class
$trait1 = new MenTrait();

$trait1->setPrice('Kitenge', 4, 2500);
echo $trait1->getPrice();
echo "<br />";
$trait1->setBiceps(40);
echo $trait1->getBiceps();
echo "<br />";
$trait1->setCore(990, 800);
echo $trait1->getCore();

echo '<hr>';
//Calling the Price trait in the WomenTrait class
$trait2 = new WomenTrait();
echo "<br />";

$trait2->setPrice('Satinn', 6, 8500);
echo $trait2->getPrice();
?>

</form>
