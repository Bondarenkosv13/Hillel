<?php

namespace Classes\Format;

use Interfaces\Format;


Class Raw implements Format
{
    public function format($string)
    {
        return $string;
    }

}
