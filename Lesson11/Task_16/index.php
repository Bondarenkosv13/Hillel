<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


abstract class SystemsPay
{
    abstract public function getSystemsPay(): SystemPayConnector;

    public function currency ()
    {
        $currency = $this->getSystemsPay();
        $currency->logIn();
        $currency->currency();
    }
}

class PayPal extends SystemsPay
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSystemsPay(): SystemPayConnector
    {
        return new PayPalConnector($this->login, $this->password);
    }
}

class Bitcoin extends SystemsPay
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSystemsPay(): SystemPayConnector
    {
        return new BitcoinConnector($this->email, $this->password);
    }
}

interface SystemPayConnector
{
    public function logIn(): void;

    public function currency(): void;
}

class PayPalConnector implements SystemPayConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function currency(): void
    {
        echo "Payment by dollars.<br>";
    }
}

class BitcoinConnector implements SystemPayConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function currency(): void
    {
        echo "Payment by bitcoins.<br>";
    }
}
function clientCode(SystemsPay $SystemsPay)
{
    $SystemsPay->currency();
}


echo "Testing SystemsPay1:<pre>";
clientCode(new PayPal("john_smith", "******"));
echo "</pre>";

echo "Testing SystemsPay2:<pre>";
clientCode(new Bitcoin("john_smith@example.com", "******"));

