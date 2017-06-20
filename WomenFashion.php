<?php

class WomenFashion extends Fashion implements Measurements{
    private $breadth, $length, $shoulder, $waist;

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