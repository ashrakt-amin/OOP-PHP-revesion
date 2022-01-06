<?php
require_once __DIR__ ."/namespace1.php";
require_once __DIR__ ."/namespace2.php";

$person =  new one\person ;
echo $person ->name ."\n" ;

$person =  new two\person ;
echo $person ->name ;