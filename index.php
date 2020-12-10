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

        var_dump(...$params);
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

$barcelona =Team::create("Barca" , [
    "Lionel Messi",
    "Cristina Ronaldo" ,
    "Dapo olamide"
]);

$barcelona->addMember("jerry Nnkwokwo");

var_dump($barcelona);





//var_dump($barcelona->members());
//

















