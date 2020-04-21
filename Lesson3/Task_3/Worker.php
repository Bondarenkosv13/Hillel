<?php

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        if ($age > 18)
        {
            $this->name     = $name;
            $this->age      = $age;
            $this->salary   = $salary;
        }
        else
        {
            $this->name     = null;
            $this->age      = null;
            $this->salary   = null;
            echo "Сотрудник не может быть не совершеннолетним!";
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}

$Jack = new Worker('Jack', 25, 1000);

$multiplication = $Jack->getAge() * $Jack->getSalary();

if ($Jack->getAge()>18)
{
    echo "Произведение возраста и зарплаты ".$Jack->getName()."а это $multiplication";
}
else
{
    echo "";
}