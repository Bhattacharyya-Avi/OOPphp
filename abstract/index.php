<?php

/*
* We can not make any object of an abstract class, we can only access it from child class.
* need to write 'abstract' key word before the 'class' keyword to make a class abstract.
* must contain a abstract function. it will only be declared in abstract class not implemented.
* abstract function only implemented in the child class.
*/

abstract class A{
   abstract protected function sum($x,$y);
}
class B extends A{
 public function sum($x,$y){
    echo $x+$y;
 }
}

$obj = new B();
$obj->sum(10,10);