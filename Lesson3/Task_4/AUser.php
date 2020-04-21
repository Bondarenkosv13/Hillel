<?php

abstract class AUser
{
    public $name;

    abstract public function name();

    abstract public function increaseRevenue();
}
class Employee extends AUser
{
    private $AverageMark = null;
    public $Age;
    public $Pay;

    public function name()
    {
        return $this->name;
    }

    // выслуга лет
    public function Age()
    {
        return $this->Age;
    }
    public function Pay ()
    {
        return $this->Pay;
    }

    public function increaseRevenue()
    {

        $increaseRevenue = $this->Pay + ($this->Pay * $this->Age / 2);
        return $increaseRevenue;
    }


}
class Student extends AUser
{
    public $AverageMark;
    public $Age;
    public $Pay;


    public function name()
    {
        return $this->name;
    }
    // количество лет учебы
    public function Age()
    {
        if ($this->Age > 5)
        {
            echo "Студент не может учиться больше 5 лет!";

            $this->Age = null;
            $this->Pay = null;
            $this->AverageMark = 0;

        }

        else
        {
            return $this->Age;
        }
    }
    // средний бал студента
    public function AverageMark()
    {
        if ($this->AverageMark > 10)
        {
            echo "Самый большой бал 10";

            $this->Age = null;
            $this->Pay = null;
            $this->AverageMark = 0;
        }
        else
        {
            return $this->AverageMark;
        }
    }

    public function Pay ()
    {
        return $this->Pay;
    }

    public function increaseRevenue()
    {
        $increaseRevenue = $this->Pay * ($this->AverageMark * $this->Age / 100) + $this->Pay;
        return $increaseRevenue;
    }
}

    $Bob = new Student();
    $Bob->name = "Bob";
    $Bob->Age = "6";
    $Bob->AverageMark = "7";
    $Bob->Pay = "2500";

    echo "Студент: ";
    Print_r($Bob->name());
        echo "<br> Курс студента:   ";
    Print_r($Bob->Age());
        echo "<br> Средний бал студента:   ";
    Print_r($Bob->AverageMark());
        echo " из 10<br>Начальная степендия студента:   ";
    Print_r($Bob->Pay());
        echo "<br>Степендия студена на данный момент:   ";
    Print_r($Bob->increaseRevenue());

    echo "<hr><br>";

    $Sam = new Employee();
    $Sam->name = "Sam";
    $Sam->Age   = '7';
    $Sam->Pay   = '4000';

    echo "Сотрудник: ";
    Print_r($Sam->name());
    echo "<br> Стаж сотрудника: ";
    Print_r($Sam->Age());
    echo "<br>Начальная зарплата сотрудника: ";
    Print_r($Sam->Pay());
    echo "<br>Степендия студена на данный момент: ";
    Print_r($Sam->increaseRevenue());

