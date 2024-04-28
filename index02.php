<?php
    $code = "1";
    $sign = "";
    switch($code)
    {
        case 0: $sign = "+"; break;
        case 1: $sign = "-"; break;
        case "1": $sign = "&"; break;
        case 2: $sign = "*"; break;
        default: $sign = "***";
    }


    echo $sign . "<br>";

    $sign = match($code)
    {
        0 => "+",
        1 => "-",
        "1" => "&",
        2 => "*",
        default => "***"
    };

    echo $sign . "<br>";

    match($code)
    {
        0 => $sign = "+",
        1 => $sign = "-",
        2 => $sign = "*",
        default => $sign = "***"
    };
    echo $sign . "<br>";

    // while()
    // {

    // }

    // do{

    // }while();

    // for($i = 0; $i < 10; $i++)
    // {
    //     continue;
    //     break;
    // }

    $nums = array(1, 2, 3, 4);
    $array = ["ten" => 5, 11 => 6, 21 => 7, 35 => 8];
    echo "<br>";
    //echo "<pre>"; var_dump($nums); echo "</pre>";
    for($i = 0; $i < count($nums); $i++)
        echo $nums[$i] . " ";
    
    echo "<br>";
    foreach($array as $key => $value)
        echo $key . " => " . $value . "<br>";

    $matrix = array(array(1, 2, 3, 4), array(5, 6, 7, 8));
    echo "<pre>"; var_dump($matrix); echo "</pre>";
    for($i = 0; $i < count($matrix); $i++)
    {
        for($j = 0; $j < count($matrix[0]); $j++)
            echo $matrix[$i][$j] . " ";
        echo "<br>";
    }

    foreach($matrix as $line)
        foreach($line as $key => $item)
            $line[$key] = 100;

    foreach($matrix as $line)
    {
        foreach($line as $item)
            echo $item . " ";
        echo "<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>