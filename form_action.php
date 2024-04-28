<?php
    $name = "anonim";
    $age = 0;
    $langs = [];
    $comp = "";
    $city = "";
    $filename = "";

    if(isset($_POST["name"]))
        $name = htmlentities($_POST["name"]);
    if(isset($_POST["age"]))
        $age = htmlentities($_POST["age"]);
    if(isset($_POST["langs"]))
        $langs = $_POST["langs"];
    if(isset($_POST["comp"]))
        $comp = $_POST["comp"];
    if(isset($_POST["city"]))
        $city = $_POST["city"];
    if($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK)
    {
        $file = $_FILES["filename"]["name"];
        move_uploaded_file($_FILES["filename"]["tmp_name"], $file);
    }
        

    //echo "Hello " . $name . ", you are " . $age . " year old<br>";
    echo "Hello $name, you are $age year old<br>";

    echo "<ul>";
    foreach($langs as $lang)
        echo "<li>$lang</li>";
    echo "</ul>";
    echo "$comp<br>";

    echo "<ul>";
    foreach($city as $c)
        echo "<li>$c</li>";
    echo "</ul>";
    //echo "$city<br>";

    echo "<a href='index.php'>Back</a>";
?>

