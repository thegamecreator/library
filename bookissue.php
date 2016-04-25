<?php
	$bookid=$_GET["bookid"];
	$sname=$_GET["sname"];
	$prn=$_GET["prn"];
	$mobile=$_GET["mobile"];
	$email=$_GET["email"];
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

$sql = "INSERT INTO `issue` (`bookid`, `Student`, `Prn`, `mobile`, `email`, `dateofissue`, `returned`) VALUES ('$bookid', '$sname', '$prn', '$mobile', '$email', CURRENT_DATE(), false)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: http://localhost/libery/first.php");

$conn->close();
?>