<?php

abstract class AchievementType{

    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0' , $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ' , '-' , $this->name())) . '.png';
    }

    abstract public function qaulifier();

}

class FirstThousandPoints extends AchievementType
{
    public function qaulifier(){
        //
    }
}

class  FirstBestAnswer extends AchievementType
{
    public function qaulifier(){
        return null;
    }

}


$achievement = new FirstThousandPoints();
echo $achievement->icon();
