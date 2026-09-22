<?php

require_once __DIR__ . '/vendor/autoload.php';

class Person {

    public string $name;
    public int $age;
    public string $gender;
    // public function __construct(public string $name, private int $age, protected string $gender){
    
    // }
        
    public function walk(): void{
        dd('Walking');
    }

    public function run():string{
        return 'Im running';
    }

    public function mostrar():void{
        dd($this->name . ' ' . $this->age . ' ' . $this->gender);
    }
    public function data(){
        return [
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->gender,
        ];
    }
}

$person = new Person();
$person->walk();



