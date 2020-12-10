<?php

class collection
{
    public array $items;


    public function __construct(array $items)
    {
        $this->items = $items;
    }


    public function sum($key)
    {

      return  array_sum(array_map(function ($items) use ($key)
        {
            return $items->$key;
        } , $this->items));
    }

}


class VideosCollection extends collection
{
    public function length(){
        return $this->sum("length");
    }
}


class videos
{
    public string $title;
    public int $length;

    /**
     * videos constructor.
     * @param string $title
     * @param int $length
     */

    public function __construct(string $title, int $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new videos("House on fire" , 60),
    new videos("Abejoye" , 100),
    new videos("Abattoir" , 300)
]);

echo $videos->length();