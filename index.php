<?php

class User
{
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello()
    {
        echo "Hello $this->name";
    }
}


$bob = new User("Bobby", 25);
$bob->hello();