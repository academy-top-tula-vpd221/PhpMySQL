<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_action.php" 
          method="post" 
          enctype="multipart/form-data">
        <input type="text" name="name" id="">
        <input type="number" name="age" id=""><br>
        <input type="checkbox" name="langs[]" value="C++">
        <input type="checkbox" name="langs[]" value="Java">
        <input type="checkbox" name="langs[]" value="C#"><br>
        <!--input type="checkbox" name="pro" id=""-->
        
        <input type="radio" name="comp" value="Yandex">
        <input type="radio" name="comp" value="Ozon">
        <input type="radio" name="comp" value="Mail Group"><br>
        <select name="city[]" id="" multiple="multiple">
            <option value="Moscow">Moscow</option>
            <option value="Tula">Tula</option>
            <option value="Voroneg">Voroneg</option>
            <option value="Kaluga">Kaluga</option>
            <option value="Orel">Orel</option>
        </select><br>
        <input type="file" name="filename" id=""><br>

        <input type="submit" value="Send">
    </form>
</body>
</html>

<?php

// $name = "anonim";
// $age = 0;

// if(isset($_GET["name"]))
//     $name = $_GET["name"];
// if(isset($_GET["age"]))
//     $age = $_GET["age"];

// echo "Name: " . $name . " Age: " . $age . "<br>";
