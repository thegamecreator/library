<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Untitled Document</title>
<script>
function searchbooks(str) {
	if (str.length == 0) { 
        document.getElementById("txthint").innerHTML = "";       
    } else {
        var xmlhttp = new XMLHttpRequest();
       xmlhttp.open("GET", "getbooks.php?qr=" + str, true);
		xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txthint").innerHTML = xmlhttp.responseText;
            }
        };	
    }
}
</script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Computer Depertment Libeary</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="addbook1.php">Add Books</a></li>
      <li><a href="first.php">Issue Book</a></li>
      <li><a href="return.php">Return Book</a></li> 
      <li><a href="logout.php">LogOut</a></li> 
    </ul>
  </div>
</nav>
<nav class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  <form role="form" action="addbook.php" method="get">
  <div class="form-group">
    <label for="email">Book Name:</label>
    <input type="text" class="form-control" name="bookname" id="bookid" onKeyUp="searchbooks(this.value)">
  </div>
  <div class="form-group">
    <label for="pwd">Author:</label>
    <input type="text" class="form-control" name="author" id="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
<form action="updateissue.php" method="get">
  
 	<span id="txthint"></span>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
  </div>
  <div class="col-sm-1"></div>
</nav>
</body>
</html>