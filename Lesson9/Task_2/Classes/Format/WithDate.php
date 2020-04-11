<?php
namespace Classes\Format;

use Interfaces\Format;
use Logger;


Class WithDate implements Format
{

    public function Record(Logger $logger)
    {
        return date('Y-m-d H:i:s') . $logger->getFormat();
    }
}