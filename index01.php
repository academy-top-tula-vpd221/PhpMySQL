<?php
        $int = 100;
        $bin = 0b01010101110;
        $hex = 0x642A7D;
        $oct = 06567;
        
        $float = 100.0;
        $fexp = 1e-2;

        $bool = true; // false
        /*

        */

        $str = "Mike 'Dev' Thomson<br>Hello Mike";
        echo $str;

        /*
            +, -, *, /, %, **
            ++, --
            . - конкатенация, соединение строк

            ==, ===, !=, !==, >, <, >=, <=
            <=>

            &&, and, ||, or, !, xor,

        */

        $a = 10;
        $b = 3;
        echo "<br>";
        echo $a / $b;
        echo "<br>";

        $c = 100;
        $d = "100";
        echo $c == $d ? "true" : "false";
        echo "<br>";

        $e = 5;
        $f = 5;
        $g = 10;
        echo $f <=> $g;
        echo "<br>";

        $title = "php example";

        if($d > 0)
        {

        }
        elseif($d == 0)
        {

        }
        else
        {

        }

        $d = -10;

        if($d > 0):
            echo "2 roots";
        elseif($d == 0):
            echo "1 root";
        else:
            echo "no roots";
        endif;



?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1>Hello world</h1>
    
    <?= "<h3>Input user info</h3>" ?>
    <p>2 * 5 = <?= 2 * 5 ?></p>
    
    <? $d = 10; ?>
    <div>
        <? if($d > 0): ?>
            <p>2 roots</p>
        <? elseif($d == 0): ?>
            <p>echo "1 root"</p>
        <? else: ?>
            <p>echo "no roots"</p>
        <? endif; ?>

    </div>
    

    <form action="form_action.php" method="post">
        <label for="">Name: </label>
        <input type="text" name="user_name"><br>
        <label for="">Age: </label>
        <input type="number" name="user_age"><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>