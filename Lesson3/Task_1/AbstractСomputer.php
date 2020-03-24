<?php
abstract class AbstractComputer
{
    public $name;

    public function __construct ($name)
    {
        $this->name = $name;
    }

    abstract public function Processor ();
    abstract public function GraphicsCard ();
    abstract public function RAM();
    abstract public function HDD();
}
class Comp1 extends AbstractComputer
{

    // понимаю, что код повторяется, а не должен. Просто показываю пример Абстракного класса

    private $CPU = 'intel CORE i5';
    private $g_card = 'NVIDIA GeForce GTX 1080';
    private $RAM = '32 ГБ';
    private $HDD = '2 ТБ';

    public function Processor()
    {
        return  $this->CPU;
    }

    public function GraphicsCard()
    {
        return  $this->g_card;
    }

    public function RAM()
    {
        return  $this->RAM;
    }

    public function HDD()
    {
        return  $this->HDD;
    }

    // Добавил еще один метод, которого нет в классе Laptop
    public function monitor ()
    {
        return 'Монитор 22" Philips';
    }
}
class Laptop extends AbstractComputer
{
    private $CPU = 'intel CORE i7';
    private $g_card = 'Intel UHD Graphics 600';
    private $RAM = '64 ГБ';
    private $HDD = '2 ТБ';

    public function Processor()
    {
        return  $this->CPU;
    }

    public function GraphicsCard()
    {
        return  $this->g_card;
    }

    public function RAM()
    {
        return  $this->RAM;
    }

    public function HDD()
    {
        return  $this->HDD;
    }

}


$Aurora = new Comp1('Aurora R7');
print_r($Aurora->name);
echo "<br>";
print_r($Aurora->Processor());
echo "<br>";
print_r($Aurora->GraphicsCard());
echo "<br>";
print_r($Aurora->RAM());
echo "<br>";
print_r($Aurora->HDD());
echo "<br>";
print_r($Aurora->monitor());
echo "<hr><br>";


$Lenova = new Laptop('Lenova IdeaPad');
print_r($Lenova->name);
echo "<br>";
print_r($Lenova->Processor());
echo "<br>";
print_r($Lenova->GraphicsCard());
echo "<br>";
print_r($Lenova->RAM());
echo "<br>";
print_r($Lenova->HDD());
echo "<br><br><br>";


