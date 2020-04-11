<?php

namespace Classes\Format;


use Interfaces\Format;
use Logger;

Class Raw implements Format
{

    public function Record(Logger $logger)
    {
        return $logger->getFormat();
    }
}
