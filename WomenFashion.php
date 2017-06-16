<?php

//Inheritance implementation - child class
class WomenFashion extends Welcome implements Core {
    private $breadth, $length, $shoulder, $waist;

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


    public function setShoulder($shoulder)
    {
        $this->shoulder = $shoulder;
    }

    /**
     * @return mixed
     */
    public function getShoulder()
    {
        return "Shoulder : ".$this->shoulder;
    }

    /**
     * @param mixed $waist
     */
    public function setWaist($waist)
    {
        $this->waist = $waist;
    }

    /**
     * @return mixed
     */
    public function getWaist()
    {
        return 'Waist : '.$this->waist;
    }

    //encapsulation - calling a method from the parent class
    public function Bye()
    {
        echo $this -> goodBye();
    }

}