<?php

// 1. Написать регулярку для проверки Является ли строка числом, длиной до 5 цифр

//    $text = "Какой-то текст 12345, еще текст 244 и еще текст 2465";
//
//    if (preg_match_all ('/\d{1,5}/', $text, $array))
//    {
//        echo "<pre>";
//        print_r ($array[0]);
//    }
//    else
//    {
//        echo "В строке нет чисел до 5 знаков!";
//    }

//2. Заменить все повторяющиеся пробелы в тексте на один

//    $text = 'Это  текст   с    моножеством  пробелов    !';
//
//    var_dump($text);
//    echo "<br>";
//
//    var_dump (preg_replace ('/\s+/', ' ', $text));

//3. Найти текст, заключенный в какой-то тег, например <TITLE> ... </TITLE> из HTML-файла и вывести данный текст

//    ob_start();
//    include_once 'title.html';
//    $text = ob_get_contents();
//    ob_end_clean();
//
/*    $reg = '/<title[^>]*?>(.*?)<\/title>/si';*/
//    preg_match_all($reg, $text, $matches);
//    print_r ($matches[1][0]);

