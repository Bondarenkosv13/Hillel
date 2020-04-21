<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

interface setUser
{
    public function Name (string $name): setUser;
    public function Surname (string $surname): setUser;
    public function Email (string $email): setUser;
    public function Phone (string $phone): setUser;
    public function Address (string $address): setUser;
}

class User implements setUser
{
    protected $query;

    protected function reset(): void
    {
        $this->query = new \stdClass;
    }

    public function Name(string $name): setUser
    {
        $this->reset();
        $this->query->name = $name;
        return $this;
    }

    public function Surname(string $surname): setUser
    {
        $this->query->surname = $surname;
        return $this;
    }

    public function Email(string $email): setUser
    {
        $this->query->email = $email;
        return $this;
    }

    public function Phone(string $phone): setUser
    {
        $this->query->phone = $phone;
        return $this;
    }

    public function Address(string $address): setUser
    {
        $this->query->address = $address;
        return $this;
    }
}


function Contact(setUser $setUser)
{
    $query = $setUser
        ->Name('John')
        ->Surname('Surname')
        ->Email('john@email.com')
        ->Phone('000-555-000')
        ->Address('Some address');

    print_r ($query);
}




echo "<pre>";
Contact(new User);
