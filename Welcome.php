<?php

//Inheritance implementation - parent class
class Welcome
{
    //encapsulation of a variable to be accessed by this classes only
    private $category;

    //encapsulation of a method to be accessed everywhere
    public function welcomeMessage($category)
    {
        return "Welcome to ".$category." Fashion Corner";
    }

    //encapsulation of a method to be accessed by child classes only
    protected function goodBye()
    {
        return "Thank you for Shopping with us.";
    }

}
?>