<?php


class Age
{
    private $age;



    /**
     * Age constructor.
     * @param $age
     */
    public function __construct($age)
    {

        if ($age < 0 || $age > 120)
        {
            throw new Exception("Age cannot have this value");
        }
        else
        {
            echo $age;
        }

        $this->age = $age;

    }
}

$bola = new Age(90);
var_dump($bola);
$bola->age = 20;
var_dump($bola);

//
//class register
//{
//    public function records (string $name ,Age $age)
//    {
//        echo $name;
//    }
//}
//
//$bola = new register();
//$bola->records("Bisi", new Age(34));