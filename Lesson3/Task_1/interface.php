<?php

interface ICompName
{
    public function name ($name);
}
interface IProcessor
{
    public function CPU ();
}
interface IRAM
{
    public function ram ();
}
interface IGraphicsCard
{
    public function G_Card();
}
interface IMonitor
{
    public function name_monitor();
    public function diagonal();
    public function matrix_type();

}

class comp implements ICompName, IProcessor, IRAM, IGraphicsCard, IMonitor
{


    public function name($name)
    {
        return $name;
    }

    public function CPU()
    {
        return 'intel CORE i5';
    }

    public function ram()
    {
        return '32 ГБ';
    }

    public function G_Card()
    {
        return 'NVIDIA GeForce GTX 1080';
    }

    public function name_monitor()
    {
        return "Philips ";
    }

    public function diagonal()
    {
        return '22" ';
    }

    public function matrix_type()
    {
        return "VA";
    }
}

$Aurora = new Comp();

print_r($Aurora->name('Aurora R7'));
echo "<br>";
print_r($Aurora->CPU());
echo "<br>";
print_r($Aurora->G_Card());
echo "<br>";
print_r($Aurora->RAM());
echo "<br>";
print_r($Aurora->name_monitor());
print_r($Aurora->diagonal());
print_r($Aurora->matrix_type());
echo "<hr><br>";