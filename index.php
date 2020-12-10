<?php



class Team  {
    protected string $name;
    protected array $members = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){
      return  $this->name;
    }

    public function members(){
        return $this->members;
    }

    public  function isAMember($name){
        if (! array_key_exists($name , $this->members)){
            return "Not a member of this team";
        }
    }

    public function addMember($name){
        $this->members[] = $name;
    }
}

$barcelona = new Team("Barca");

$barcelona->addMember("Lionel Messi");
$barcelona->addMember("Cristina Ronaldo");
var_dump($barcelona);

















