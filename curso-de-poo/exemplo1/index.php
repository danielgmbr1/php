<?php

require_once __DIR__ . '/../vendor/autoload.php';

class Person {
    public static string $name;
    public static int $age;

    public static function walk(){
        self::$name = 'John';

        return self::$name . ' is Walking...';
    }
}

//$person = new Person();
dd(Person::walk());