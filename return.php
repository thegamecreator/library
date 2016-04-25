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
function searchbooks() {
	var str=document.forms["search"]["issueid"].value;
	var str1=document.forms["search"]["bookid"].value;
	var str2=document.forms["search"]["bookname"].value;
	if (str.length == 0) { 
        document.getElementById("txthint").innerHTML = "";       
    } else {
        var xmlhttp = new XMLHttpRequest();
		alert(str1+" "str2);
       xmlhttp.open("GET", "getbooks.php?isid=" + str+"&name="+str1+"&bid="+str2, true);
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
  <form role="form" name="search" action="return2.php" method="get">
  <div class="form-group">
    <label for="pwd">Issue ID:</label>
    <input type="text" class="form-control" name="issueid" id="pwd" onKeyUp="searchbooks()">
  </div>
  <div class="form-group">
    <label for="email">Book ID:</label>
    <input type="text" class="form-control" name="bookid" id="bookid" onKeyUp="searchbooks()">
  </div>
  <div class="form-group">
    <label for="pwd">Book Name:</label>
    <input type="text" class="form-control" name="bookname" id="bookname" onKeyUp="searchbooks()">
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