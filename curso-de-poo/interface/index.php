<?php

require '../vendor/autoload.php';

interface DatabaseInterface{
    public function connect();
}
class MysqlDatabase implements DatabaseInterface{
    public function connect(){
        return 'Connected to MySQL';f
    }
}
class SqLiteDatabase{
    
}
class PsgDatabase{
    
}

class Database{
    public function connect(string $type){
        if ($type == 'mysql') {
            return new MysqlDatabase();
        } elseif ($type == 'sqlite'){
            return new SqLiteDatabase();
        } elseif ($type == 'psg') {
            return new PsgDatabase();
        }
    }
}

$database = new Database();

$connect = $database->connect('psg');

dd($connect);