<?php

//Inheritance implementation - child class
class MenFashion extends Fashion implements Core {

    private $breadth, $length, $biceps;

    public function welcomeMessage($category)
    {
        return "Welcome to ".$category." Fashion.php Corner";
    }

//    Inheriting methods from the parent class Fashion
    public function setFashion($material, $color, $attire)
    {
        parent::setFashion($material, $color, $attire);
    }

    public function getFashion()
    {
        return parent::getFashion();
    }

    //Interface method redeclaration
    public function setCore($breadth, $length)
    {
        $this -> breadth = $breadth;
        $this -> length = $length;
    }

    //Interface method redeclaration
    public function getCore()
    {
        return "Breadth : ".$this->breadth ."</br>Length : ".$this->length;
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
        echo $this -> goodBye();
    }
}


