<?php
require_once __DIR__ ."/autoload.php";
//require_once __DIR__ ."/person.php";
try{

$person =new person;
echo $person->name ="mmm" ;

 $object1 =new person;
 $object1->name ='ssss' ;
 echo $object1->name ;

echo person::gethead();


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


$object1->change($object1);
echo $object1->name;
// ro constant with object
echo $object1::FEMALE;
}catch(Exception $e){
 echo $e->getMessage();
}