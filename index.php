<?php

try
{
    $connectionPdo = new PDO("mysql:host=localhost", "root", "");
    echo "Connection with BD";
}
catch(PDOException $ex)
{
    echo "Connection failed: " . $ex->getMessage();
}

$connectionPdo = null;