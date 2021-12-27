<?php
//include __DIR__."/persons.php";
//include_once __DIR__."/persons.php";
require_once __DIR__."/persons.php";
require_once __DIR__."/interface.php";



class student extends person implements human{
   public $class;

   function one($a){

   }
   function two(){

   }
}
$ob =new student;
if($ob instanceof studet){
    echo "\n yes , ob is object from student class";
}else{
    echo "\n no , ob is object from person class";

}
echo $ob->name;
echo $ob->class="one";

//call method in person class
echo student::gethead();

?>