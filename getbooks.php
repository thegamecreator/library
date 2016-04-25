<?php
error_reporting(0);
$isid=$_GET["isid"];
$bid=$_GET["bid"];
$name=$_GET["name"];
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
$sql="SELECT * FROM `issue` where issueid = ".$isid." or bookid like '&".$bid."&'"." or Student like '&".$name."&'";
$result=$conn->query($sql);
$a[]=Array();
if ($result->num_rows > 0) {
    // output data of each row
	echo "<table width='100%' class='table table-striped'><tr><th>Issue Id</th><th>Book ID</th><th>Student Name</th><th>Date of Return</th><th>Email</th><th>mobile</th><th>return</th></tr><td>";
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["issueid"]."</td><td>".$row["bookid"]."</td><td>".$row["Student"]."</td><td>".$row["dateofissue"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td><input type='checkbox' value='".$row["issueid"]."' name='bookid'";
		echo "></td></tr>";
	}
}else{
	echo "no books found";
}

?>