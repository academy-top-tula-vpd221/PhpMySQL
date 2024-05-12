<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Book info:</h3>
    <?php
        if(isset($_GET["id"]))
        {
            try
            {
                $connectionPdo = new PDO("mysql:host=localhost; dbname=library" , "root", "");
                $strSql = "SELECT b.title, a.last_name, a.first_name, p.title AS publisher, b.price
                            FROM book AS b
                            INNER JOIN author AS a ON a.id = b.author_id
                            INNER JOIN publisher AS p ON p.id = b.publisher_id
                            WHERE b.id = :book_id";

                $prepare = $connectionPdo->prepare($strSql);
                $prepare->bindValue(":book_id", $_GET["id"]);

                $prepare->execute();

                if($prepare->rowCount() > 0)
                {
                    foreach($prepare as $row)
                    {
                        echo "Title book: " . $row["title"] . "<br>";
                        echo "Author last name: " . $row["last_name"] . "<br>";
                        echo "Author first name: " . $row["first_name"] . "<br>";
                        echo "Publiser title: " . $row["publisher"] . "<br>";
                        echo "Price: " . $row["price"] . "<br>";
                    }
                    
                }
            }
            catch(PDOException $ex)
            {
                echo "Connection failed: " . $ex->getMessage();
            }

            $connectionPdo = null;
        }
    ?>
    <p><a href="index.php">Back</a></p>
</body>
</html>