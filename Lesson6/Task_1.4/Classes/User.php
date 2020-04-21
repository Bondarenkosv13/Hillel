<?php
class User
{
    private $name;
    private $password;
    private $email;
    private $text;
    private $error;

    public function __construct($name)
    {
        if($name == '')
        {
            $error = "Заполните поле Логин!";
            return $this->error=$error;
        }
        elseif(preg_match('/\w{15,}/', $name) !== 0)
        {
            $error = 'Слишком длинный Логин! Максимально допустимое число символов - 15!';
            return $this->error=$error;
        }
        else
        {
            return $this->name=$name;
        }
    }

    public function GetName()
    {
        return $this->name;
    }

    public function SetPassword ($password)
    {
        if($password == '')
        {
            $error = "Заполните поле Пароль!";
            return $this->error=$error;
        }
        elseif(preg_match('/\w{7,}/', $password) === 0)
        {
            $error = 'Слишком маленький пароль! Пароль должен содержать не менее 8 символов.';
            return $this->error=$error;
        }
        elseif(preg_match('/[^а-яa-z\-_0-9]+/ui', $password) !== 0)
        {
            $error = 'Пароль может использовать буквы английского и русского алфавита, "-" , "_" и цифры.';
            return $this->error=$error;
        }
        else
        {
            return $this->password = $password;
        }

    }

    public function GetPassword ()
    {
        return $this->password;
    }

    public function SetEmail($email)
    {
        if($email == '')
        {
            $error = "Заполните поле E-mail!";
            return $this->error=$error;
        }
        else
        {
            return $this->email = $email;
        }
    }

    public function GetEmail ()
    {
        return $this->email;
    }

    public function SetText ($text)
    {
        if($text == '')
        {
            $error = "Заполните поле Текст!";
            return $this->error=$error;
        }
        else {
            $preg = "/[A-ZА-Я]/u";
            preg_match_all($preg, $text, $matches);

            foreach ($matches[0] as $key) {
                $OldText[] = "/$key/";
            }
            foreach ($matches[0] as $key) {
                $NewText[] = "<i>$key</i>";
            }

            $text = preg_replace($OldText, $NewText, $text);
            return $this->text = $text;

        // Если все заглавные буквы сделать маленькими нужно сделать слудующее:
        // preg_replace("/[A-ZА-Я]/u", "/[a-zа-я]/u", $text);

        }
    }

    public function GetText ()
    {
        return $this->text;
    }

    public function GetError ()
    {
        return $this->error;
    }
}