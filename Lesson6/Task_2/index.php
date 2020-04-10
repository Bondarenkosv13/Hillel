<?php

// Задание 1 по презентации
  /*      $user = 'user.php';

        try
        {
            if(file($user) === false)
            {
                throw new Exception ("Файл с именем $user не существует");
            }

        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }
  */


// Основное задание
class User
{
    public $id;
    private $password;
    private $email;

    public function SetId($id)
    {
        try {
            if(!is_int($id))
            {
                throw new Exception();
            }
            $this->id = $id;
        }
        catch (Exception $ex)
        {
            echo "Ошибка в файле: " . $ex->getFile() . " на строке: " . $ex->getLine() . "<br>";


        }
    }

    public function GetId ()
    {
        return $this->id;
    }

    public function SetPassword($password)
    {
        try {
            if(preg_match('/\w{8,}/', $password) === 0)
            {
                throw new Exception();
            }
            $this->password = $password;
        }
        catch (Exception $ex)
        {
            echo "Ошибка в файле: " . $ex->getFile() . " на строке: " . $ex->getLine() . "<br>";


        }
    }



    public function getUserData()
    {
        echo "$this->id, $this->email";
    }

}



$user = new User();
$user->SetId(12);
$user->SetPassword('1234567');



