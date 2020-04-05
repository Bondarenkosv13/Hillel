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
    private $id;
    private $password;
    private $email;

    public function SetId($id)
    {
        try {
            if(gettype($id) !== 'integer')
            {
                throw new Exception();
            }
        }
        catch (Exception $ex)
        {
            echo "Ошибка в файле: " . $ex->getFile() . " на строке: " . $ex->getLine() . "<br>";


        }
        return $this->id = $id;

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
        }
        catch (Exception $ex)
        {
            echo "Ошибка в файле: " . $ex->getFile() . " на строке: " . $ex->getLine() . "<br>";


        }
        return $this->password = $password;

    }



    public function getUserData()
    {
        echo "$this->id, $this->email";
    }

}



$user = new User();
$user->SetId(wfsdf);
$user->SetPassword('1234567');



