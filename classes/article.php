<?php 
require __DIR__.'/../autoloader.php';




class Article{
    public $title;
    public $text;
    public $author;
    public $createdOn;



    public function saveArticle(){
        $db_connect = new db_connect;
        $pdo = $db_connect->connection();
        $sql="INSERT INTO articles (title,text ,author ,createdOn) VALUES (:title,:text,:author,:createdOn)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title',$this->title);
        $stmt->bindParam(':text', $this->text); 
        $stmt->bindParam(':author', $this->author); 
        $stmt->bindParam(':createdOn', $this->createdOn); 
        $stmt->execute();
        
    }

    public static function showArticles(){
        $db_connect = new db_connect;
        $pdo = $db_connect->connection();
        $stmt = $pdo->prepare('SELECT * FROM articles');
        $stmt->execute();
        return $stmt->fetchAll();
    }






}

?>