<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Books:</h3>
    <table><tr><td>Title</td><td></td><td></td><td></td></tr>
        <?php
            try
            {
                $connectionPdo = new PDO("mysql:host=localhost; dbname=library" , "root", "");
                $strSql = "SELECT id, title FROM book";
                $result = $connectionPdo->query($strSql);

                foreach($result as $row)
                {
                    echo "<tr>
                            <td>" .$row["title"] . "</td>
                            <td><a href='book.php?id=" . $row["id"] . "'>View</a></td>
                            <td><a href='book_edit.php?id=" . $row["id"] . "'>Edit</a></td>
                            <td><a href='book_delete.php?id=" . $row["id"] . "'>Delete</a></td>
                          </tr>";
                }
            }
            catch(PDOException $ex)
            {
                echo "Connection failed: " . $ex->getMessage();
            }

            $connectionPdo = null;
        ?>
    </table>
</body>
</html>