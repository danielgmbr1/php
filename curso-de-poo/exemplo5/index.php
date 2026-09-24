<?php

require '../vendor/autoload.php';

class Container {
    protected static array $bindings = [];

    public static function set(string $key, mixed $value){
        static::$bindings[$key] = $value;
    }

    public static function resolve(string $key){
        return static::$bindings[$key];
    }
}

Container::set('name', 'Daniel');
Container::set('age', '19');

dump(Container::resolve('name'));

Container::set('name', 'Daniel2');
dump(Container::resolve('age'));
dump(Container::resolve('name'));