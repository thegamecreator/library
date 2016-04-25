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
      <li><a href="#">Add Books</a></li>
      <li class="active"><a href="#">Issue Book</a></li>
      <li><a href="#">Return Book</a></li> 
      <li><a href="#">LogOut</a></li> 
    </ul>
  </div>
</nav>
<nav class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
<form role="form" action="issue2.php" method="get">
	<table width="100%" class=".table-striped">
    <tr>
    	<th>Book ID</th><th>Book Name</th><th>Author</th><th>Select Book</th>
    </tr>
    <tr>
    <?php
	$id=$_GET["bookid"];
	$name=$_GET["bookname"];
	$aut=$_GET["author"];
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

$sql = "SELECT * FROM books where name='$name' or bookid='$id'";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row['bookid']."</td><td>".$row['name']."</td><td>".$row['author']."</td><td><input type='radio' value='$id' name='bookid'><td></tr>";
	}
}
$conn->close();
?>
	</table>
  		<button type="submit" class="btn btn-default">Submit</button>
</form>
	<div class="col-sm-1"></div>
</body>
</html>