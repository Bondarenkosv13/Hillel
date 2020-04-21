<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function getGenerator()
{
    $f = fopen('cats.csv', 'r');

    while ($line = fgets($f))
    {
        yield $line;
    }

    fclose($f);

}


foreach (getGenerator() as $key ) {

    $row = explode(',', $key);
    echo "<pre>";
    print_r($row);

}






