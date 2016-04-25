<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Computer Depertment Libeary</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="addbook1.php">Add Books</a></li>
      <li><a href="first.php">Issue Book</a></li>
      <li class="active"><a href="return.php">Return Book</a></li> 
      <li><a href="logout.php">LogOut</a></li> 
    </ul>
  </div>
</nav>
<nav class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  <form role="form" action="return2.php" method="get">
  <div class="form-group">
    <label for="pwd">Issue ID:</label>
    <input type="text" class="form-control" name="issueid" id="pwd">
  </div>
  <div class="form-group">
    <label for="email">Book ID:</label>
    <input type="text" class="form-control" name="bookid" id="bookid">
  </div>
  <div class="form-group">
    <label for="pwd">Book Name:</label>
    <input type="text" class="form-control" name="bookname" id="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
<form action="updateissue.php" method="get">
  <table width="100%" class="table table-striped">
  <tr>
  	<th>Issue Id</th><th>Book Id</th><th>Student Name</th><th>Mobile</th><th>PRN</th><th>Date of Issue</th><th>
    Select Book</th>
  </tr>
  <?php
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
$sql = "SELECT * FROM `issue`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$iss=$row["issueid"];
		if($row["returned"]==0 and $iss==$_GET["issueid"])
		{
        echo "<tr><td>".$iss."</td><td>".$row["bookid"]."</td><td>".$row["Student"]."</td><td>".$row["mobile"]."</td><td>".$row["Prn"]."</td><td>";
		$da=str_split($row["dateofissue"]);
		for($i=0;$i<4;$i++)
		{
			echo $da[$i];
		}
		echo "/";
		for($i=4;$i<6;$i++)
			echo $da[$i];
		echo "/";
		for($i=6;$i<8;$i++)
			echo $da[$i];
		echo "</td><td><input type='radio' name='issueid' value='$iss'></td></tr>";
		}
    }
} else {
    echo "0 results";
}
$conn->close();

  ?>
  </table>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
  </div>
  <div class="col-sm-1"></div>
</nav>
</body>
</html>