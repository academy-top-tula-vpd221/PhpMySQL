<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Country:</h3>
    <?php
        $strSql = "SELECT * FROM Country";
        // $connection = new mysqli("localhost" , "root", "", "library");
        // if($connection === false)
        //     die("Connection failed " . $connection->connect_error);

        // if($result = $connection->query($strSql))
        // {
        //     foreach($result as $row)
        //         echo $row["title"] . "<br>";
        // }
        // $connection->close();

        $connection = mysqli_connect("localhost" , "root", "", "library");
        if($connection === false)
            die("Connection failed " . mysqli_connect_error());

        if($result = mysqli_query($connection, $strSql))
            while($row = mysqli_fetch_array($result))
            echo $row["title"] . "<br>";

        mysqli_close($connection);
    ?>

    <h3>Add country:</h3>
    <form action="add.php" method="post">
        <label for="txt_country">Country</label>
        <input type="text" value="" name="txt_country" /><br>

        <label for="chk_activity">Activity</label>
        <input type="checkbox" name="chk_activity" id="chk_activity"><br>

        <input type="submit" value="Add">
    </form>
</body>
</html>