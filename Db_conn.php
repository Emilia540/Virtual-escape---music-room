<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VER";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
 
