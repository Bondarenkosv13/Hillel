<?php
namespace Classes\Deliver;

use Interfaces\Deliver;
use Interfaces\Format;

class ByEmail implements Deliver
{

    public function Output(Format $format)
    {
        echo "Вывод формата ({$format}) по имейл";
    }
}