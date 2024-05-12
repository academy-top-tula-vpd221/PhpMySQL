<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Country:</h3>
    <form method="post">
        <label for="txt_country">Country</label>
        <input type="text" value="" name="txt_country" /><br>

        <label for="chk_activity">Activity</label>
        <input type="checkbox" name="chk_activity" id="chk_activity"><br>

        <input type="submit" value="Create">
    </form>
</body>
</html>

<?php

if(isset($_POST["txt_country"]))
{
    $activity = "off";
    $country = $_POST["txt_country"];
    $activity = $_POST["chk_activity"];
    $activity = ($activity == "on") ? 1 : 0;

    try
    {
        $connectionPdo = new PDO("mysql:host=localhost; dbname=library" , "root", "");

        //$connectionPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection with BD";

        //$strSql = "USE library; CREATE TABLE Country (id INT AUTO_INCREMENT PRIMARY KEY, title VARCHAR(50), activity TINYINT(1));";

        $strSql = "INSERT INTO Country (title, activity) VALUES (:country, :activity)";
        //echo $strSql;

        $prepare = $connectionPdo->prepare($strSql);
        // $prepare->bindValue(":country", $country);
        // $prepare->bindValue(":activity", $activity);

        $rows_count = $prepare->execute([":country" => $country, ":activity" => $activity]);
        if($rows_count > 0)
            echo "Country $country add to database";

        //$fields_count = $connectionPdo->exec($strSql);
        //if($fields_count > 0)
        //    echo "Country $country add to database";
    }
    catch(PDOException $ex)
    {
        echo "Connection failed: " . $ex->getMessage();
    }

    $connectionPdo = null;
}

