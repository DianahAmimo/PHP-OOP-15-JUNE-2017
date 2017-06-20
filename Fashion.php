<?php
    class Fashion{
        private $material, $color, $attire;

        public function setFashion($material, $color, $attire)
        {
            $this->material = $material;
            $this->color = $color;
            $this->attire = $attire;
        }

        public function getFashion()
        {
            echo '<strong><u><i>Fashion description </i></u></strong></br>';
            return "Material: ". $this->material . "</br>Color: ". $this->color ."</br>Attire: ". $this->attire;
        }

        public function welcomeMessage($category)
        {
            return "<strong>Welcome to ".$category." Fashion Corner</strong>";
        }

        //encapsulation of a method to be accessed by child classes only
        protected function goodBye()
        {
            return "<i>Thank you for Shopping with us.</i>";
        }
    }