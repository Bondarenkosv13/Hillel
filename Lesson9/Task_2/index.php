<?php
include_once 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Interfaces\Deliver;
use Interfaces\Format;
use Classes\Deliver\ByEmail;
use Classes\Deliver\BySms;
use Classes\Deliver\ToConsole;
use Classes\Format\Raw;
use Classes\Format\WithDateAndDetails;
use Classes\Format\WithDate;

class Logger
{

    private $format;
    private $delivery;

    public function __construct($format, $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function GET (Format $str)
    {
        return $str;
    }


    public function log($string)
    {
        $this->deliver($this->format($string));
    }
}

$logger = new Logger('raw', 'by_sms');
//$logger->log('Emergency error! Please fix me!');

print_r($logger->GET(new Raw()));
// Тут я пытаюсь вывести что находиться в классе Raw, хотел увидеть результат 'raw'
// т.к. это строка поля $format. У меня ничего не показывает, я дальше я просто не понимаю как мне вывести хть что-то