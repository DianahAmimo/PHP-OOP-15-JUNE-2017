<?php

class WomenTrait{
//initializing a sharable trait
use Price;

private $breadth, $length, $shoulder, $waist;


    public function setCore($breadth, $length)
{
    $this -> breadth = $breadth;
    $this -> length = $length;
}

    public function getCore()
{
    return "Breadth : ".$this->breadth ."</br>Length : ".$this->breadth;
}


    public function setShoulder($shoulder)
{
    $this->shoulder = $shoulder;
}

    public function getShoulder()
{
    return "Shoulder : ".$this->shoulder;
}

    public function setWaist($waist)
{
    $this->waist = $waist;
}

    public function getWaist()
{
    return 'Waist : '.$this->waist;
}

}