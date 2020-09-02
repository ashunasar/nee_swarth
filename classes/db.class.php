<?php 

class Db{
    
//    private $host = 'mysql:host=localhost;dbname=uvgpvmzqfh';
//    private $user = 'uvgpvmzqfh';
//    private $pass = '6eHwMfmp5F';
    
    private $host = 'mysql:host=localhost;dbname=nee_swarth';
    private $user = 'root';
    private $pass = '';
    
    protected function connect(){
        $pdo = new PDO($this->host,$this->user,$this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        
        return $pdo;
    }
}
