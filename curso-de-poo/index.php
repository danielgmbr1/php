<?php

require_once __DIR__ . '/vendor/autoload.php';

class Person {

    public string $name;
    private int $age;

    protected string $gender;
    public function __construct(public string $name, public int $age, public string $gender){
        dd('I am running');
    }
        
    public function walk():string{
        return $this->name . ' is walking';
    }

    public function run():string{
        return 'Im running';
    }

    public function data(){
        return [
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->gender,
        ];
    }
}

//$Daniel = new Person();
//$Daniel->name = 'Daniel';
//$Daniel->age = 19;
//$Daniel->gender = 'Masculino';

$person = new Person('Daniel', 18, 'masculino');


