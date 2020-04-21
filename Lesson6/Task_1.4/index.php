<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'Classes/User.php';

if (count($_POST) > 0)
{
    $name       = trim($_POST['login']);
    $password   = trim($_POST['password']);
    $email      = trim($_POST['email']);
    $text       = $_POST['text'];

    $user = new User($name);
    $user->SetPassword($password);
    $user->SetEmail($email);
    $user->SetText($text);

        if ($user->GetError() !== null)
        {
            $msg = $user->GetError();
        }
        else
        {
            $data = 'User: ' . $user->GetName() . '; Password: ' . $user->GetPassword() . '; E-mail: ' . $user->GetEmail() . '; About him: ' . $user->GetText() . ".<br>";
            $users = fopen('Users.html', 'a');
            fwrite($users, $data);
            fclose($users);
            header('Location: index.php');
            exit();
        }

}
else
{
    $name       = "";
    $password   = "";
    $email      = "";
    $text       = "";
    $msg        = "";
}

echo $msg;
include_once 'view/add.php';
include_once 'Users.html';


