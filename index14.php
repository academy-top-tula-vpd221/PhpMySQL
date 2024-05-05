<?php

// $file = fopen("file.txt", "w") or die("error file");

// $text = "Hello world\n";
// fwrite($file, $text);
// fputs($file, $text);

//$file = fopen("file.txt", "r") or die("error file");
// while(!feof($file))
// {
//     $text = htmlspecialchars(fgets($file));
//     echo "$text<br>";
// }
// fclose($file);

// $text = fgets($file);
// echo "$text<br>";

// fseek($file, -5, SEEK_CUR);
// $text = fgets($file);
// echo "$text<br>";

// SEEK_SET, SEEK_END, SEEK_CUR

// mkdir("subdir");
// rename("file.txt", "subdir/file.dat");

//unlink("file01.txt");

//rmdir("subdir");

function del_dir($dir = "")
{
    if($dir == "")
        $dir = getcwd();
    echo "Cur dir: $dir<br>";

    if($dir_info = opendir($dir))
    {
        while(false !== ($entry = readdir($dir_info)))
        {
            if($entry == "." || $entry == "..") continue;
            if(is_dir($dir . "\\" . $entry))
            {
                del_dir($entry);
                //rmdir($dir . "\\" . $dir);
                echo "Dir: $entry<br>";
            }
            else
            {
                //unlink($dir . "\\" . $entry);
                echo "File: $entry<br>";
            }
                
        }
        //rmdir($dir);
        closedir($dir_info);
    }
}

del_dir(getcwd() . "\subdir");


