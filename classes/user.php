<?php 
require __DIR__.'/../autoloader.php';

// session_start();

class User{
    public $username;
    public $password;
    public $email;
    public $role;
// 
    public function __construct($username,$password,$email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        // $this->role = $role;
    }

    public static function loginUser($email,$password){
        $db_connect = new db_connect;
        $pdo = $db_connect->connection();
        $sql = "SELECT * FROM users WHERE email=:email AND password=:password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password); 
        $stmt->execute();
        $row = $stmt->fetch();
        if(!empty($row)){
            // $_SESSION['profile']=$row;
            return $row;
        }  
        else{
            return false;
        }
        unset($stmt);
        unset($pdo);
    }


    public static function logout(){
        session_destroy();
        header('Location: signup.php');
        exit;
    }

    }

?>