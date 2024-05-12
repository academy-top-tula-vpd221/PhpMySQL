<?php
//oop

if(isset($_POST["txt_country"]))
{
    $connection = new mysqli("localhost" , "root", "", "library");
    if($connection === false)
        die("Connection failed " . $connection->connect_error);

    $country = $connection->real_escape_string($_POST["txt_country"]);
    $activity = $_POST["chk_activity"];
    $activity = ($activity == "on") ? 1 : 0;

    $strSql = "INSERT INTO Country (title, activity) VALUES ('$country', $activity)";

    if($connection->query($strSql))
        echo "country $country add to table<br>";
    else
        echo "error: $connection->error <br>";

    $connection->close();

    // $connection = mysqli_connect("localhost" , "root", "", "library");
    // if($connection === false)
    //     die("Connection failed " . mysqli_connect_error());

    // $country = $connection->real_escape_string($_POST["txt_country"]);
    // $activity = $_POST["chk_activity"];
    // $activity = ($activity == "on") ? 1 : 0;

    // $strSql = "INSERT INTO Country (title, activity) VALUES ('$country', $activity)";
    // if(mysqli_query($connection, $strSql))
    //     echo "country $country add to table<br>";
    // else
    //     echo "error: " . mysqli_error($connection) . "<br>";

    // echo "<a href='index.php'>Back</a>";

    // mysqli_close($connection);


    echo "<a href='index.php'>Back</a>";
}



