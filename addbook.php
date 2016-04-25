<?php
	$user=$_GET["bookname"];
	$pass=$_GET["author"];
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `test`.`books` (`name`, `author`, `bookid`, `DOD`) VALUES ('$user', '$pass', NULL, CURRENT_DATE())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: addbook1.php");

$conn->close();
?>