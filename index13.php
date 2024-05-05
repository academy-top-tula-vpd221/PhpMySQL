<?php
// $login = "admin";
// $age = 35;
// $password = "qwerty";

// setcookie("name", $login, time() + 3600);
// setcookie("age", $age, time() + 3600);
// setcookie("pass", $password, time() + 3600);

// $_COOKIE[key]

// if(isset($_COOKIE["name"]))
//     echo "Login: " . $_COOKIE["name"] . " ";
// if(isset($_COOKIE["age"]))
//     echo "Age: " . $_COOKIE["age"] . " ";
// if(isset($_COOKIE["pass"]))
//     echo "Password: " . $_COOKIE["pass"] . " ";
// if(isset($_COOKIE["address"]))
//     echo "Address: " . $_COOKIE["address"] . " ";

// setcookie("city[0]", "Moscow", time() + 3600);
// setcookie("city[1]", "Tula", time() + 3600);
// setcookie("city[2]", "Voroneg", time() + 3600);

// if(isset($_COOKIE["city"]))
// {
//     foreach($_COOKIE["city"] as $city => $title)
//     {
//         $city = htmlspecialchars($city);
//         $title = htmlspecialchars($title);
//         echo "$city => $title<br>";
//     }
// }

// foreach($_COOKIE as $key => $value)
// {
//     if(gettype($value) != "array")
//         setcookie($key, "", 0);
//     else
//         //setcookie((string)$key, [], 0);
//     {

//         //foreach($value as $k => $v)
//         //      echo (string)$key[$k] . "<br>";
//         //    setcookie((string)$key[$k], "", 0);
//     }
// }
    
//echo "$key => $value <br>";

session_start();
// echo session_id() . "<br>";
// echo session_name() . "<br>";
class Box
{
    public $w;
    public $h;
    function __construct($w, $h)
    {
        $this->w = $w;
        $this->h = $h;
    }
}

$box = new Box(5, 6);

$_SESSION["login"] = "admin";
$_SESSION["age"] = 35;
$_SESSION["box"] = $box;
