<?php
  require_once __DIR__."/abstract.php";

  //if in abstract class abstract method we must define it in child class or give us fetal error
class www extends abs{


    public function hello(){
        echo "hello";
    }
}
 $ob=new www;
 $ob->hello();
?>