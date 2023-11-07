<?php
session_start();
require_once 'Dao.php';

// require_once 'KLogger.php';
// $logger = new KLogger ("log.txt" , KLogger::WARN);
echo "<html>signup_handler loaded<br></html>";
sleep(2);

$username = $_POST['username'];
echo "<html>got username<br></html>";
$password = $_POST['password'];
echo "<html>got password<br></html>";
// $logger->LogDebug("User [{$username}] attempting to create account");

$dao = new Dao();
echo "<html>dao created</html>";
$dao->createUser($username, $password);
echo "<html>user created</html>";
$_SESSION['message'] = "Thanks for signing up!";
header("Location: login.php");