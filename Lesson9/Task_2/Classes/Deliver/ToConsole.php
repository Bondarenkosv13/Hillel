<?php
namespace Classes\Deliver;

use Interfaces\Deliver;


class ToConsole implements Deliver
{

    public function Output($formattedString)
    {
        echo "Вывод формата ({$formattedString}) в консоль";
    }
}