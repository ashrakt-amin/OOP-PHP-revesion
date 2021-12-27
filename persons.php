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

}
 
$object1 =new person ;
 $object1->name ='ssss' ;

echo person::gethead();

echo $object1->name ;

//constant directly with (class name , :: )
echo person::MALE;
/* $object1->setage(20);
echo $object1->getage();*/

echo  $object1->setage(20)->getage();

$object2 =$object1;
$object1->name ='nora';
echo $object2->name  ;

$object1 =clone $object2;
echo $object2->name ;

function change($ob){
    $ob-> name ="ali";
}
change($object1);
echo $object1->name;
// ro constant with object
echo $object1::FEMALE;

?>