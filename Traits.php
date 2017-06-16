<?php
//traits implementation
trait Wel
{
    public function welcomeMessage($gender)
    {
        return "Welcome to ".$gender." Fashion Corner";
    }
}

class WFashion{
    //initializing a sharable trait
    use Wel;

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

}

class MFashion{
    //initializing a sharable trait
//    use Welcome;

    private $breadth, $length,$biceps;

    public function setCore($breadth, $length)
    {
        $this -> breadth = $breadth;
        $this -> length = $length;
    }

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
}


$mary = new WFashion();
echo $mary -> welcomeMessage('Women');
echo '<br />.......................................<br />';
$mary -> setCore(50, 60);
$mary -> setShoulder(45);
$mary -> setWaist(45);

echo $mary -> getCore();
echo "<br />";

echo $mary -> getShoulder();
echo "<br />";

echo $mary -> getWaist();
echo "<br /><br /><br />";



$john = new MFashion();
echo $john -> welcomeMessage('Men');
echo '<br />........................................<br />';
$john -> setCore(70, 80);
$john -> setBiceps(28);

echo $john -> getCore();
echo "<br />";

echo $john -> getBiceps();
echo "<br />";

?>