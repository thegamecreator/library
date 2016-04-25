<?php
$issue=$_GET["issueid"];
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

$sql = "UPDATE `test`.`issue` SET `returned` = 1 WHERE `issue`.`issueid` = $issue";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	header("Location: return.php");

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>