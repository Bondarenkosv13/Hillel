<?php
namespace Classes\Deliver;

use Interfaces\Deliver;
use Interfaces\Format;

class ToConsole implements Deliver
{

    public function Output(Format $format)
    {
        echo "Вывод формата ({$format}) в консоль";
    }
}