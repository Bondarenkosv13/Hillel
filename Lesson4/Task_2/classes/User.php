<?php

class User
{
    private $name;
    private $age;
    private $email;

    private function setName ($name)
    {
        $this->name = $name;
    }

    private function setAge ($age)
    {
        $this->age = $age;
    }

    public function __call ($method, $parameters)
    {
        if (in_array($method, array ('setName', 'setAge')))
        {
            return call_user_func_array(array ($this, $method), $parameters);
        }else{
            echo "Таких методов нет!";
            exit;
        }
    }

    public function getAll()
    {

        echo "Имя объкта " . $this->name . ", его возраст ". $this->age. ". Его E-mail: " . $this->email;
    }
}