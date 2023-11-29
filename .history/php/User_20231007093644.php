<?php
class User {
   public $username;
   public $password;
   public $powerlvl;

   public function __construct($username, $password, $powerlvl = 0) {
      $this->username = $username;
      $this->password = $password;
      $this->powerlvl = $powerlvl;
   }

   public function authenticate($password) {
      return (this->password == $password);
   }

   public function setPassword($password) {
      $this->password = $password;
   }

   public function setPowerlvl($powerlvl) {
      $this->powerlvl = $powerlvl;
   }
}
?>
