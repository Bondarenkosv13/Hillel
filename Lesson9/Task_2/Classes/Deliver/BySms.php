<?php
namespace Classes\Deliver;

use Interfaces\Deliver;


class BySms implements Deliver
{

    public function Output($formattedString)
    {
        echo "Вывод формата ({$formattedString}) в смс";
    }
}