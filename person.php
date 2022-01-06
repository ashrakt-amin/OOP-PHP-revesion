<?php 
require_once __DIR__."/trait.php";


 Class person {
     // name is the name of trait
    use n ;
    private $age;
    //static : value is costant in all class
    const MALE ='m';
    const FEMALE ='f';
    protected static $head =1;

    public function getage(){
        return $this->age ;
    }
    public function setage($a){
       $this->age =$a ;
       return $this;
    }
    public static function gethead(){
        return person::$head;
        return self::$head;
        return static::$head;

    }
    public  function sethead($h){
       $this->$head =$h ;
       return $this;
    }
    function change($ob){
        $ob-> name ="ali";
    }

}
 


?>