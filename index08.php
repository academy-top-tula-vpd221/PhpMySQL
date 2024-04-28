<?php
    // mkdir("subdir");

    // if(rename("file01.txt", "subdir/hhh.dat"))
    //     echo "all right<br>";
    // else
    //     echo "error";

    /*

    copy(oldname, newname); copy file
    unlink(filename); delete file
    mkdir(dirname); make directory
    rmdir(dirname); remove directory
    */
    //echo getcwd(); //return current path

    // $dir_curr = getcwd();

    // if(is_dir($dir_curr))
    // {
    //     if($dir = opendir($dir_curr))
    //     {
    //         while(($dir_entity = readdir($dir)) !== false)
    //         {
    //             if($dir_entity == "." || $dir_entity == "..")
    //                 continue;
    //             if(is_dir($dir_entity))
    //                 echo "$dir_entity -dir-<br>";
    //             else
    //                 echo "$dir_entity -file-<br>";
    //         }
    //         closedir($dir);
    //     }
    // }

    /*
        LOCK_SH
    */

    $file = fopen("file01.txt", "r") or die("error");
        if(flock($file, LOCK_SH))
        {
            while(!feof($file))
            {
                $str = fgets($file);
                echo "$str<br>";
            }
        }
    fclose($file);
