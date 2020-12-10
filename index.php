<?php

class AchievementType{

    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0' , $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ' , '-' , $this->name())) . '.png';
    }

}

class FirstThousandPoints extends AchievementType
{
    public function qaulifier($user){
        return null;
    }
}

class  FirstBestAnswer extends AchievementType
{
    public function qaulifier($user){
        return null;
    }

}


$achievement = new FirstThousandPoints();
echo $achievement->icon();
