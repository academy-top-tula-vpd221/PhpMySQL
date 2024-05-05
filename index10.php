<?php

class User
{
    // public $name;
    public $age;

    
    function __construct(public $name = "", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello()
    {
        echo "Hello $this->name <br>";
    }

    function __destruct()
    {
        echo "destruct<br>";
    }
}

$employee = new class("Bobby") {
    public $name;
    public $position;

    function __construct($name)
    {
        $this->name = $name;
        $this->position = "Manager";
    }

    function info()
    {
        echo "Name: $this->name, Position: $this->position<br>";
    }
};


abstract class Shape
{
    protected $x;
    protected $y;

    function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function to_string()
    {
        return "($this->x, $this->y)";
    }

    abstract function square();
    abstract function perimetr();
}

class Rectangle extends Shape
{
    public $width;
    public $height;

    function __construct($x = 0, $y = 0, $width = 0, $height = 0)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;
    }

    function to_string()
    {
        return parent::to_string() . " w: $this->width, h: $this->height";
    }

    function square()
    {
        return $this->width * $this->height;
    }
    function perimetr()
    {
        return 2 * ($this->width + $this->height);
    }
}




class Module
{
    private $name;
    private $id;
    static $id_count = 0;

    function __construct($name)
    {
        $this->name = $name;
        $this->id = ++self::$id_count;
    }

    function info()
    {
        return "$this->name, $this->id";
    }

    static function global_id()
    {
        return self::$id_count;
    }
}


// $bob = new User("Bobby", 25);
// $bob->hello();

// $empty = new User();
// $empty->hello();

// $employee->info();

$rect = new Rectangle(1, 5, 20, 9);

echo "square = " . $rect->square() ."<br>";
echo "perimetr = ". $rect->perimetr() . "<br>";
// echo $rect->to_string() . "<br>";

// echo $rect instanceof Rectangle . "<br>";
// echo $rect instanceof Shape . "<br>";
// echo $rect instanceof Circle . "<br>";

$cpp = new Module("C++");
$cs = new Module("C#");
echo $cpp->info() . "<br>";
echo $cs->info() . "<br>";
echo Module::global_id() . "<br>";