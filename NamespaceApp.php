<?php

namespace app;

class NamespaceApp
{
    //encapsulation of a variable to be accessed by this classes only
    private $category;

    //encapsulation of a method to be accessed by child classes only
    public function goodBye()
    {
        return "Thank you for Shopping with us.";
    }

    //encapsulation of a method to be accessed everywhere
    public function welcomeMessage($category)
    {
        return "Welcome to ".$category." Fashion.php Corner";
    }

}