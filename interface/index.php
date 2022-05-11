<?php

/*
* use when we need to inherite multiple class into one class.
* don't have properties, only have methods.
* interface is like a classes. but we cannot create object of interface, but we can create number of
method in side an interface but can't implement that method in interface. 
* methods inside the interface doesn't contain accessmodifier.
*/

interface A{
    function sum($x,$y);
}

interface B{
    function sub($x,$y);
}

class child implements A,B{
    public function sum($x, $y)
    {
        echo $x+$y;
    }

    public function sub($x,$y)
    {
        echo $x-$y;
    }
}

$obj = new child();
echo $obj->sum(10,10)."<br>";
echo $obj->sub(10,10);