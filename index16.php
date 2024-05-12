<?php

    try
    {
        $publisher_id = 1;

        $connectionPdo = new PDO("mysql:host=localhost; dbname=library" , "root", "");
        $strSql = "SELECT b.title, a.last_name, a.first_name, p.title AS publisher, b.price
                    FROM book AS b
                    INNER JOIN author AS a ON a.id = b.author_id
                    INNER JOIN publisher AS p ON p.id = b.publisher_id
                    WHERE p.id = :publisher_id";

        $prepare = $connectionPdo->prepare($strSql);
        $prepare->bindvalue(":publisher_id", $publisher_id);

        $prepare->execute();

        if($prepare->rowCount() > 0)
        {
            //$result = $connectionPdo->query($strSql);

            //while($row = $result->fetch())
            echo "<table border='1'>
            <tr><td>Title book</td><td>Author last name</td><td>Author first name</td>
            <td>Publisher</td><td>Price</td></tr>";
            //foreach($result as $row)
            foreach($prepare as $row)
            {
                //echo "<pre>"; print_r($row); echo "</pre>";
                // $id = $row["id"];
                // $first_name = $row["first_name"];
                // $last_name = $row["last_name"];
                // echo "$id $first_name $last_name <br>";

                echo "<tr>
                    <td>" . $row["title"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["publisher"] . "</td>
                    <td>" . $row["price"] . "</td></tr>";

                echo "<br>";
            }
            echo "</table>";
        }

        
    }
    catch(PDOException $ex)
    {
        echo "Connection failed: " . $ex->getMessage();
    }

    $connectionPdo = null;
