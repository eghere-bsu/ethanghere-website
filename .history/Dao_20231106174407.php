<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Dao.php
// class for saving and getting comments from MySQL
class Dao {

  private $host = "localhost";
  private $db = "db";
  private $user = "eghere";
  private $pass = "labrador";

  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }

  public function createUser($username, $password, $powerlvl = 0) {
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $conn = $this->getConnection();
    $createUser = "INSERT INTO Users (username, password, powerlvl) VALUES (:username, :password, :powerlvl)";
    $q = $conn->prepare($createUser);
    $q->bindParam(":username", $username);
    $q->bindParam(":password", $hashedPassword);
    $q->bindParam(":powerlvl", $powerlvl);
    $q->execute();
  }

  public function usernameExists($username) {
    $conn = $this->getConnection();
    $usernameExists = 
        "SELECT COUNT(*) 
        FROM Users 
        WHERE username = :username";
    $q = $conn->prepare($usernameExists);
    $q->bindParam(":username", $username);
    $q->execute();
    return $q->fetchColumn() > 0;
  }

  public function validateUser($username, $password) {
    //Prepare query
    $conn = $this->getConnection();
    $validateUser = 
        "SELECT user_id, password, powerlvl 
        FROM Users 
        WHERE username = :username";
    $q = $conn->prepare($validateUser);
    $q->bindParam(":username", $username);
    $q->execute();
    //Match password
    $userRow = $q->fetch(PDO::FETCH_ASSOC);
    if ($userRow && password_verify($password, $userRow['password'])) {
        return true;
    } else {
        return false; 
    }
  }

  public function getUserId($username) {
    $conn = $this->getConnection();
    $getUserId = 
        "SELECT user_id
        FROM Users
        WHERE username = :username";
    $q = $conn->prepare($getUserId);

  }
  public function getPowerlvl ($username) {
    $conn = $this->getConnection();
    $getPowerlvl = 
        "SELECT powerlvl
        FROM Users
        WHERE username = :username";
    $q = $conn->prepare($getPowerlvl);
    $q->bindParam(":username", $username);
    $q->execute();

    $powerlvl = $q->fetchColumn();
    return $powerlvl;
  }

  public function createPost($user_id, $title, $description, $post_link, $image_url, $category) {
    $conn = $this->getConnection();
    $createPost = "INSERT INTO Posts (user_id, title, description, post_link, image_url, category)
                        VALUES (:user_id, :title, :description, :post_link, :image_url, :category)";
    $q = $conn->prepare($createPost);
    $q->bindParam(":user_id", $user_id);
    $q->bindParam(":title", $title);
    $q->bindParam(":description", $description);
    $q->bindParam(":post_link", $post_link);
    $q->bindParam(":image_url", $image_url);
    $q->bindParam(":category", $category);
    $q->execute();
  }


  // public function getComments () {
  //   $conn = $this->getConnection();
  //   return $conn->query("SELECT comment, date_entered, id FROM comments ORDER BY date_entered desc")->fetchAll(PDO::FETCH_ASSOC);
  // }
} // end Dao
