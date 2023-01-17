<?php 

class db_connect{
    private $host="localhost";
    private $db_name="planetdev";
    private $username="root";
    private $pass="";
    public function connection(){
        try{
            
            $dsn = "mysql:host=$this->host; dbname=$this->db_name" ;
            $pdo = new PDO($dsn, $this->username, $this->pass) ;
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo ;
        }
        catch(PDOException $e){
            echo "connection is failed ".$e->getMessage();
        }
    }
}

?>