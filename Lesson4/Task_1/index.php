<?php

include_once 'Trait/Trait1.php';
include_once 'Trait/Trait2.php';
include_once 'Trait/Trait3.php';

class Test
{
    use Trait1, Trait2, Trait3
    {
        Trait1::method insteadof Trait2;
        Trait1::method insteadof Trait3;
        Trait2::method as Trait2;
        Trait3::method as Trait3;
    }

    public function getSum ()
    {
        $sum = $this->method() + $this->Trait3() + $this->Trait2();
        return $sum;
    }

}

$a = new Test ();
echo "Сумма треинов равна ".$a -> getSum();

