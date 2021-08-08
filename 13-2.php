<?php
/**
 * Use '$this' to refer to the current object. Use 'self' to refer to the current class. In other words, use $this->member for non-static members, use self::$member for static members.
 */


// Here is an example of polymorphism with $this for member functions
class X {
    function foo(){
        echo "X::foo()\n";
    }
    function bar(){
        $this->foo();
    }
}
class Y extends X{
    function foo(){
        echo "Y::foo()\n";
    }
}
$x = new Y();
$x->bar();


// Here is an example of suppressing polymorphic behaviour by using self for member functions

class A {
    function foo(){
        echo "A::foo()\n";
    }
    function bar(){
        self::foo();
    }
}
class B extends A{
    function foo(){
        echo "B::foo()\n";
    }
}

$B = new B();
$B->bar();

// The idea is that '$this->foo()' calls the foo() member function of whatever is the exact type of the current object. If the object is of type X, it thus calls X::foo().  if the object is of type Y, its calls Y::foo(). But with self::foo(), A::foo() is always called