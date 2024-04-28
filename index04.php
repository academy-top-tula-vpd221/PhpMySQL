<?php

if(!defined("PI"))
    define("PI", 3.14);

define("MAX", 100);

//echo defined("PI") . "<br>";
//echo PI . MAX;

// echo __FILE__ . "<br>";
// echo __LINE__ . "<br>";
// echo __DIR__ . "<br>";

// show_func_name();


function show_func_name()
{
    echo __FUNCTION__ . "<br>";
}

/*
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__
*/

//ISSET
// $var = "";
// //if(isset($var))
// if(!empty($var))
//     echo $var;
// else
//     echo "empty";

// unset($var);

// echo $var;

$var = "Hello";
echo gettype($var) . "<br>";
echo is_string($var) . "<br>";

$var = 100;
echo gettype($var) . "<br>";
echo is_string($var) . "<br>";
echo is_integer($var) . "<br>";

$var = true;
echo gettype($var) . "<br>";

$var = 67.90;
echo gettype($var) . "<br>";

$var = [1, 2, 3];
echo gettype($var) . "<br>";

$var = ["one" => 1, "two" => 2];
echo gettype($var) . "<br>";

/*
is_bool
is_array
is_scalar
is_null
is_object
*/

$var = 123.456;
//settype($var, "integer");
$int_var = (int)$var;

/*
(int), (integer)
(real), (double), (float)
(bool), (boolean)
(string)
(array)
(object)
*/

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo is_array($array) . "<br>";
echo count($array) . "<br>";
echo sizeof($array) . "<br>";
shuffle($array);
echo "<pre>"; print_r($array); echo "</pre>";

$name = 22;
$age = 34;
$married = 45;

$data = compact("name", "age", "married");
echo "<pre>"; print_r($data); echo "</pre>";

asort($data);
echo "<pre>"; print_r($data); echo "</pre>";
arsort($data);
echo "<pre>"; print_r($data); echo "</pre>";
ksort($data);
echo "<pre>"; print_r($data); echo "</pre>";
krsort($data);
echo "<pre>"; print_r($data); echo "</pre>";
