<?php
class Worker
{
    public $name;
    public $age;
    public $salary;

    public function name($name)
    {
        return $name;
    }

    public function age($age)
    {
        return $age;
    }

    public function salary($salary)
    {
        return $salary;
    }

}

$John       = new Worker();
$J_name     = $John->name ('John');
$J_age      =$John->age('25');
$J_salary   =$John->salary('1000');


$Vasia      = new Worker();
$V_name     = $Vasia->name ('Вася');
$V_age      =$Vasia->age('26');
$V_salary   =$Vasia->salary('2000');

$sum_salary = $J_salary + $V_salary;
$sum_age    = $J_age + $V_age;

echo "Сумма зарплат $J_name и $V_name равна $sum_salary.<br><br>";
echo "Сумма возрастов $J_name и $V_name равна $sum_age.";