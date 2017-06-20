<?php
    class MenTrait{
        //initializing a sharable trait
        use Price;

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