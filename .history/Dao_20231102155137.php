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
    $createUserQuery = "INSERT INTO Users (username, password, powerlvl) VALUES (:username, :password, :powerlvl)";
    $q = $conn->prepare($createUserQuery);
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
    $conn = $this->getConnection();
    $checkUserQuery = 
        "SELECT user_id, password 
        FROM Users 
        WHERE username = :username";
    $q = $conn->prepare($checkUserQuery);
    $q->bindParam(":username", $username);
    $q->execute();

    $userRow = $q->fetch(PDO::FETCH_ASSOC);

    if ($userRow && password_verify($password, $userRow['password'])) {
        return true; // Valid username and password
    } else {
        return false; // Invalid username or password
    }
}


  public function deleteComment ($id) {
    $conn = $this->getConnection();
    $deleteComment =
        "DELETE FROM comments
        WHERE id = :id";
    $q = $conn->prepare($deleteComment);
    $q->bindParam(":id", $id);
    $q->execute();
  }

  public function saveComment ($comment, $imagePath = "") {
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO comments
        (comment, image_path)
        VALUES
        (:comment, :image_path)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":comment", $comment);
    $q->bindParam(":image_path", $imagePath);
    $q->execute();
  }


  public function getComments () {
    $conn = $this->getConnection();
    return $conn->query("SELECT comment, date_entered, id FROM comments ORDER BY date_entered desc")->fetchAll(PDO::FETCH_ASSOC);
  }
} // end Dao
