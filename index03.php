<?php
function Hello($name = "Anonim")
{
    //echo "Hello world!";
    echo "Hello " . $name;
}

function Sum($a, $b)
{
    if(gettype($a) == "string")
        return $a . $b;
    else
        return $a + $b;
}

function Summa(...$numbers)
{
    $result = 0;
    foreach($numbers as $num)
        $result += $num;
    return $result;
}

$func = function($a, $b, $oper)
{
    return $oper($a, $b);
};

$sum_oper = fn($a, $b) => $a + $b; //function($a, $b)
// { 
//     return $a + $b; 
// };

$amount = 10;
$counter = function($i) use($amount)
{
    $amount += $i;
    return $amount;
};

function NaturalGen($start = 0, $end = 1000000)
{
    for($i = $start; $i < $end; $i++)
        yield $i;
    // for($i = 10; $i > 0; $i--)
    //     yield $i;

    // yield 100;
    // yield 123;
    // yield 201;
    // yield 56;
    // yield 999;

}


//Hello("Bobby");

//echo $func(40, 20, $sum_oper); // Summa(10, 20, 30); //Sum(b: 20, a: "abc");
//echo $func(40, 20, fn($a, $b) => $a * $b);

// for($i = 0; $i < 5; $i++)
//    echo $counter($i + 1) . ' ';

// foreach(NaturalGen(10, 20) as $num)
// {
//     echo $num . " ";
// }
// echo "<br>";

// $i = 0;
// foreach(NaturalGen() as $num)
// {
//     echo $num . " ";
//     if($i < 20) $i++;
//     else break;
// }

// $num1 = 100;
// $num2 = &$num1;
// $num2 = 200;
// echo $num1;

function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

const PI = 3.14;
define("MAX", 100);


$x = 20;
$y = 40;
echo $x . " " . $y . "<br>";
swap($x, $y);
echo $x . " " . $y . "<br>";

function &CheckName($name)
{
    if ($name === "admin") $name = "bobby";
    return $name;
}

$userName = "admin";
$goodName = CheckName($userName);

echo "User name " . $userName . "<br>";
echo "Good name " . $goodName . "<br>";

?>