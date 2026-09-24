<?php

require '../vendor/autoload.php';

class A extends B{
    protected static function method1(){
        return 'Method 1 from A';
    }
    
    public static function execute(){
        return parent::method1();
    }
}

class B {
    protected static function method1(){
        return 'Method 1 from B';
    }

  
}

dump(A::execute());