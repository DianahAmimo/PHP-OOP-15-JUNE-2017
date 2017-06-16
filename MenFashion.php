<?php

//Inheritance implementation - child class
class MenFashion extends Welcome implements Core {
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
        echo $this -> goodBye();
    }
}

?>