<?php


class Database
{
    private $servername="localhost";
    private $username="root";
    private $password="";
    private $dbname="store";
    function connect(){
    try{
//        var_dump($this);
//        var_dump($this->username);
        $conn= new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo"the connection is sucess ";
        return $conn;

    }
    catch (PDOException $e){
        echo"error connection".$e->getMessage();

    }
    }
}