
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
      <li class="active"><a href="first.php">Issue Book</a></li>
      <li><a href="return.php">Return Book</a></li> 
      <li><a href="logout.php">LogOut</a></li> 
    </ul>
  </div>
</nav>
<nav class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  <form role="form" action="issuebook.php" method="get">
  <div class="form-group">
    <label for="email">Book ID:</label>
    <input type="text" class="form-control" name="bookid" id="bookid">
  </div>
  <div class="form-group">
    <label for="pwd">Book Name:</label>
    <input type="text" class="form-control" name="bookname" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Author:</label>
    <input type="text" class="form-control" name="author" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  <table width="100%" class="table table-striped">
  <tr>
  	<th>Issue Id</th><th>Book Id</th><th>Student Name</th><th>Is Returned?</th><th>Mobile</th><th>PRN</th>Date of Issue</th>
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
    	if($row["returned"]==0)
		{
	    echo "<tr><td>".$row["issueid"]."</td><td>".$row["bookid"]."</td><td>".$row["Student"]."</td><td><input type='checkbox' class='checkbox' ";
		echo "></td><td>".$row["mobile"]."</td><td>".$row["Prn"]."</td>";
	}
    }
} else {
    echo "0 results";
}
$conn->close();

  ?>
  </table>
  </div>
  <div class="col-sm-1"></div>
</nav>
</body>
</html>