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

    public static function deleteArticle($id){

        $db_connect = new db_connect;
        $pdo = $db_connect->connection();
        $stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
        $stmt->bindValue(':id',$id);
        $stmt->execute();
      }

    public static function nbrArticles(){
        $db_connect = new db_connect;
        $pdo = $db_connect->connection();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM articles ");
        $stmt->execute();
        return $stmt->fetchColumn();

    }
 
    
  public static function updateArticle($id,$text,$title,$author,$date){
    $db_connect = new db_connect;
    $pdo = $db_connect->connection();
    $stmt = $pdo->prepare("UPDATE articles SET text = :text , title=:title , author=:author , CreatedOn=:CreatedOn WHERE id = :id");
    $stmt->bindValue(':text',$text);
    $stmt->bindValue(':title',$title);
    $stmt->bindValue(':author',$author);
    $stmt->bindValue(':CreatedOn', $date);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
}

public static function DisplayArticle($id){
    $db_connect = new db_connect;
    $pdo = $db_connect->connection();
    $stmt = $pdo->prepare('SELECT  FROM articles WHERE id=:id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch();
}





}

?>