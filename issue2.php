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
<body style="overflow:hidden;">
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
  	<form role="form" action="bookissue.php" method="get">
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
$sql = "SELECT * FROM books where bookid='".$_GET["bookid"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
    while($row = $result->fetch_assoc()) {
		$id=$_GET["bookid"];
		$bname=$row["name"];
		$aut=$row["author"];
		echo "
    	<div class='form-group'>
    		<label for='bookid'>Book ID</label><input type='text' name='bookid' value='$id' class='form-control' disabled>
        </div>
        <div class='form-group'>
    		<label for='bookname'>Book Name</label><input type='text' name='bname' value='$bname' class='form-control' disabled>
        </div>
		<div class='form-group'>
    		<label for='bookname'>Author</label><input type='text' name='aut' value='$aut' class='form-control' disabled>
        </div>";
	}
}
	?>
		<div class='form-group'>
    		<label for='sname'>Student Name</label><input type='text' name='sname' class='form-control'>
        </div>
        <div class='form-group'>
    		<label for='prn'>PRN</label><input type='text' name='prn' class='form-control'>
        </div>
        <div class='form-group'>
    		<label for='mobile'>Mobile</label><input type='text' name='mobile' class='form-control'>
        </div>
        <div class='form-group'>
    		<label for='email'>EMail</label><input type='text' name='email' class='form-control'>
        </div>
        <div class='form-group'>
    		<input type='submit' name='submit' class='btn btn-default'>
			<button type="reset" class="btn btn-default">Reset</button>
        </div>
    </form>
  </div>
  <div class="col-sm-1"></div>
</body>
</html>