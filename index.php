<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>login</title>
<script>
	function validate() {
    	var x = document.forms["MyLogin"]["usr"].value;
		var p = document.forms["MyLogin"]["pwd"].value;
    	if (x == null || x == "") {
    	    alert("Name must be filled out");
    	    return false;
    	}
		if (p == null || p == "") {
    	    alert("Password must be filled out");
    	    return false;
    	}
	}
</script>
</head>
<body>
<div class="row">
  <div class="col-sm-4"> </div>
  <div class="col-sm-4"> 
  <form action="login.php" name="MyLogin" onSubmit="return validate();" method="post">
  	<div class="form-group">
  		<label for="usr">Name:</label>
  		<input type="text" name="usr" class="form-control">
	</div>
	<div class="form-group">
  		<label for="pwd">Password:</label>
  		<input type="password" name="pwd" class="form-control">
	</div>
    <div class="form-group">
  		<input type="submit" value="Login" class="btn btn-primary">
        <button type="reset" class="btn btn-primary">Reset</button>
	</div>
    </form>
  </div>
  <div class="col-sm-4"> </div> 
</div>
</body>
</html>
