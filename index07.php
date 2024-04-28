<?php
    /*
    r - read, if not exisis - false
    r+ read/write, if not exisis - false
    w - write, if existd and not exisis - create new
    w+ - write/read - if existd and not exisis - create new
    a - append(write) - if not exisis - create
    a+ - append(write/read) - if not exisis - create
    */

    // $file = fopen("file01.txt", "w") or die("error with file");

    // $str = "Hello world";
    // fwrite($file, $str);
    $file = fopen("file01.txt", "r") or die("error with file");

    //$str = fgets($file);
    //$str = file_get_contents("file01.txt");
    while(!feof($file))
    {
        //$str = fgets($file);
        //$str = fread($file, 10);
        $str = fgets($file);
        echo "$str<br>";
    }
    

    fclose($file);
