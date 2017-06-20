<?php

//namespace male;
//autoloading implementation - autoloading all classes from all files
//spl_autoload_register(function($className){
//    include $className. '.php';
//});

include 'NamespaceApp.php';
use app as app;

//Inheritance implementation - child class
class NamespaceExecute{
    private $breadth, $length,$biceps;

    //Interface method redeclaration
    public function setCore($breadth, $length)
    {
        $this -> breadth = $breadth;
        $this -> length = $length;
    }

    //Interface method redeclaration
    public function getCore()
    {
        return "Breadth : ".$this->breadth ."</br>Length : ".$this->breadth;
    }

    public function setBiceps($biceps)
    {
        $this->biceps = $biceps;
    }
    public  function  getBiceps()
    {
        return "Biceps : ".$this->biceps;
    }
    //encapsulation - calling a method from the parent class
    public function Bye()
    {
        //implementation of namespace
        echo app\NamespaceApp::goodBye();
    }
}

$john = new namespaceExecute();

//implementation of namespace
echo app\NamespaceApp::welcomeMessage('Men');

echo '<br />........................................<br />';
$john -> setCore(70, 80);
$john -> setBiceps(28);

echo $john -> getCore();
echo "<br />";

echo $john -> getBiceps();
echo "<br />";

echo $john -> Bye();
echo "<br />";

?>