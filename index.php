<?php



class Team  {
    protected string $name;
    protected array $members = [];

    public function __construct($name , $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function create(...$params){
        return new static(...$params);
    }

    public function getName(){
      return  $this->name;
    }

    public function members(){
        return $this->members;
    }

    public  function isAMember($name){
        if (array_key_exists($name , $this->members)){
            return "Membership is valid";
        }else
            return "Not a member of the team";
    }

    public function addMember($name){
        $this->members[] = $name;
    }
}


class Member{
    public string $name;
    public array $portfolio;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function designation($portfolio){
        return $this->portfolio = $portfolio;
    }

}

$barcelona =Team::create("Barca" , [
    new Member("Ferdinard Okasd" ),
    new Member("Taye Taiwo"),
    new Member("Dapo olamide")
]);



var_dump($barcelona);


















