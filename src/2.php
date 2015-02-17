<?php

/**
 * file 2.php
 * Description : Visibility of Properties public / private / protected
 */

class Human {
    
    /**
     * Class member variables are called "properties".
     * http://php.net/manual/en/language.oop5.properties.php
     */
    
    public $name = 'Human';
    
    private $nationality = 'Thai';
    
    protected $nickName = 'Tun';
    
}

//Create Object
$humanObject = new Human();

//Access property of class
echo $humanObject->name;
//echo $humanObject->nationality; //Fatal error to access private property
//echo $humanObject->nickName; //Fatal error to access protected property

