<?php
    class EmplyeeAgeException extends Exception
    {
        function __construct($age)
        {
            $this->message = "Age: $age incorrect";
        }
    }

    class Employee
    {
        private $name, $age;
        function __construct($name, $age)
        {
            $this->name = $name;
            if($age < 0)
                throw new EmplyeeAgeException($age);
            $this->age = $age;
        }
        
    }

    try
    {
        $empl = new Employee("Bobby", -20);
    }
    catch(Exception $ex)
    {
        echo "{$ex->getMessage()}<br>";
    }

    $number = 10;
    try
    {
        $result = 100 / $number;
        echo "result = $result<br>";
    }
    catch(Throwable $ex)
    {
        echo "$ex<br>";
    }
    finally
    {

    }
    
    echo "end of action<br>";