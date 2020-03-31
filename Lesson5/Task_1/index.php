<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'classes/CsvIterator.php';


$file = file('cats.csv');


$csv = new CsvIterator($file);


foreach ($csv->getArray() as $key ) {

   $row = explode(',', $key);
   echo "<pre>";
    print_r($row);

}

