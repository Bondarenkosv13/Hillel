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

    public $format;
    public $delivery;

    public function __construct(Format $format, Deliver $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
       echo  $this->delivery->output($this->format->format($string));
    }
}

$logger = new Logger(new WithDateAndDetails(), new ByEmail());
$logger->log('Emergency error! Please fix me!');

