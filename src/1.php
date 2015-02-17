<?php

/**
 * file 1.php
 * Description : create a simple php object
 */

class Human {
    
    /**
     * Class member variables are called "properties".
     * http://php.net/manual/en/language.oop5.properties.php
     */
    
    public $name = 'Human';
    
}

//Create Object
$humanObject = new Human();

//Access property of class
echo $humanObject->name;

