<?php

class register
{
    public function records ($name , $age)
    {
        echo $name;

        echo $age;
    }
}

$bola = new register();
$bola->records("Bisi", -200);