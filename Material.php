<?php

class Material
{
//initializing a sharable trait
    use PriceTrait;

    private $location;

    public function importedFrom($location)
    {
        $this->location = $location;
        return "Imported from : " . $this->location;
    }
}
