<?php
//traits implementation
trait Price
{
    public $material, $size, $cost;
    public function setPrice($material, $size, $cost){
        $this->material = $material;
        $this->size = $size;
        $this->cost = $cost;
    }

    public function getPrice(){
        echo '<strong><i><u>This is a trait implementation</u></i></strong></br>';
        return 'Material: ' . $this->material .'</br>Size: ' . $this->size . '</br>Cost: ' . $this->cost;
    }
}
