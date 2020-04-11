<?php
namespace Classes\Deliver;

use Interfaces\Deliver;
use Interfaces\Format;

class BySms implements Deliver
{

    public function Output(Format $format)
    {
        echo "Вывод формата ({$format}) в смс";
    }
}