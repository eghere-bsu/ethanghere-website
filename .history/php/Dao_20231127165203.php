<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Dao.php
// class for saving and getting comments from MySQL
class Dao {

  private $host;
    private $db;
    private $user;
    private $pass;

    public function __construct() {
        // Determine the server name
        $serverName = $_SERVER['SERVER_NAME'];

        // Set the database credentials based on the server name
        if ($serverName === 'localhost') {
            // Local database credentials
            $this->host = 'localhost';
            $this->db = 'db';
            $this->user = 'eghere';
            $this->pass = 'labrador';
        } else {
            // Online database credentials
            $this->host = 'vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'; 
            $this->db = 'r9n0gt3rioqj5f5n';
            $this->user = 'bf28epl5ub2me1yp';
            $this->pass = 'dbrnyuq8526w3wp3';
        }
    }
    
  //deployment
  //mariadb -h vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com -u bf28epl5ub2me1yp -pdbrnyuq8526w3wp3 r9n0gt3rioqj5f5n


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
    $q->bindParam(":username", $username);
    $q->execute();

    $user_id = $q->fetchColumn();
    return $user_id;
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

  public function getPosts() {
    $conn = $this->getConnection();

    $getPostsQuery = "SELECT * FROM Posts ORDER BY created_at DESC";
    $q = $conn->prepare($getPostsQuery);
    $q->execute();

    return $q->fetchAll(PDO::FETCH_ASSOC);
  }
} 
