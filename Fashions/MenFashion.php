<?php namespace Fashions;

//Inheritance implementation - child class
class MenFashion extends Fashion implements Measurements {

    private $breadth, $length, $biceps;

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
    public function setMeasurements($breadth, $length)
    {
        $this -> breadth = $breadth;
        $this -> length = $length;
    }

    //Interface method redeclaration
    public function getMeasurements()
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


