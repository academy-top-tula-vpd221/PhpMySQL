<?php

class Company
{
    public $title;

    function __construct($title = "")
    {
        $this->title = $title;
    }
}

class Person
{
    public int $name;
    public $company;
    public $age;
    const ageMax = 100;
    public readonly int $minSalary;

    function __construct(string $name, object $company, float $age, $minSalary)
    {
        $this->name = $name;
        $this->company = $company;
        $this->age = $age;
        $this->minSalary = $minSalary;
    }

    function __clone()
    {
        $this->company = clone $this->company;
    }

    function info() : void
    {
        echo "name: $this->name, company: " 
            . $this->company->title 
            . "($this->age) min salary: $this->minSalary<br>";
    }
}

class Box
{
    public readonly int $width;
    public readonly int $height;
    
    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function square() : int
    {
        return $this->width * $this->height;
    }
}

function get_operation(string $sign) : callable
{
    switch($sign)
    {
        case "+" : return fn($a, $b) => $a + $b;
    }
}

function sum(int|float $a, int|float $b) : int|float
{
    return $a + $b;
}


// $company = new Company("Yandex");
// $bob = new Person("Bobby", $company, 34, 30000);
// //$tom = new Person("Tommy", $company);


// $bob->info();
// $sam = clone $bob;
// $sam->name = "Sammy";
// $sam->company->title = "Mail Group";
// $bob->info();
// $sam->info();


$div1 = new Box(20, 30);
echo "w: $div1->width, h: $div1->height<br>";
