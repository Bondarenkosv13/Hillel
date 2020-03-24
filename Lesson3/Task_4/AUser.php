<?php

abstract class AUser
{
    public $name;

    abstract public function name();

    abstract public function increaseRevenue();
}
class Employee extends AUser
{
    public function name()
    {
        return $this->name;
    }

    // выслуга лет
    public function WorkAge()
    {

    };

    public function increaseRevenue()
    {

    }


}
class Student extends AUser
{
    private $AverageMark;
    private $StudyAge;
    private $StudyPay;
    private $increaseRevenue;

    public function name()
    {
        return $this->name;
    }
    // количество лет учебы
    public function StudyAge($StudyAge)
    {
        if ($StudyAge > 5)
        {
            echo "Студент не может учиться больше 5 лет!";
        }
        else
        {
            return $StudyAge;
        }
    }
    // средний бал студента
    public function AverageMark($AverageMark)
    {
        if ($AverageMark > 10)
        {
            echo "Самый большой бал 10";
        }
        else
        {
            return $AverageMark;
        }
    }

    public function StudyPay ()
    {
        return $this->StudyPay;
    }

    public function increaseRevenue()
    {
        $increaseRevenue = $this->StudyPay * ($this->AverageMark * $this->StudyAge / 100) + $this->StudyPay;
        return $increaseRevenue;
    }
}

