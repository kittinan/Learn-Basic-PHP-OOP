<?php

/**
 * file 3.php
 * Description : Create Method
 */

if (php_sapi_name() == "cli") {
    // In cli-mode
    define('LINE_BREAK', "\n");
} else {
    // Not in cli-mode
    define('LINE_BREAK', "<br />");
}

class Human {
    
    /**
     * Class member variables are called "properties".
     * http://php.net/manual/en/language.oop5.properties.php
     */
    
    public $name = 'Human';
    
    private $nationality = 'Thai';
    
    protected $nickName = 'Tun';
    
    
    public function eat() {
        echo $this->name . ' Eat';
    }
    
    private function think() {
        $number = rand(0, 100);
        return $number;
    }
    
    protected function walk() {
        return 'I am walker';
    }
    
    public function introduce() {
        $text = 'My name is ' . $this->name . LINE_BREAK;
        $text .= 'My nickname is ' . $this->nickName . LINE_BREAK;
        $text .= 'My nationality is ' . $this->nationality . LINE_BREAK;
        return $text;
    }
    
}

//Create Object
$humanObject = new Human();

//Access property of class
//echo $humanObject->name;
//echo $humanObject->nationality; //Fatal error to access private property
//echo $humanObject->nickName; //Fatal error to access protected property

//Access Method
$humanObject->eat();
//$humanObject->think(); //Fatal error to access private property
//$humanObject->walk(); //Fatal error to access protected property
echo LINE_BREAK . $humanObject->introduce();