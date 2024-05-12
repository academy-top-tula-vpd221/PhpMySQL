<?php

$connection = new mysqli("localhost" , "root", "", "library");
//$connection = mysqli_connect("localhost" , "root", "");


if($connection->connect_error)
//if($connection === false)
    //die("Connection failed " . $connection->connect_error);
    die("Connection failed " . mysqli_connect_error());

echo "Connection good<br>";

$strSql = "CREATE TABLE Country (id INT AUTO_INCREMENT PRIMARY KEY, title VARCHAR(50), activity TINYINT(1));";

if($connection->query($strSql))
    echo "table country create<br>";
else
    echo "error: $connection->error";

// if(mysqli_query($connection, $strSql))
//     echo "table country create<br>";
// else
//     echo "error: " . mysqli_error($connection);


$connection->close();
//mysqli_close($connection);