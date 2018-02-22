<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
	.container{background-color: #039be5;
	           text-align: center;}
}
#LL{text-align: center;}
</style>
</head>
<body>
	<div class="LL">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><h2>KULAMOTO SECONDARY SCHOOL</h2></a>
		</div>

		<br><br>
		<br><br>

		<div class="ww">
		<img src="john.jpeg" width="400px">
	    </div>

	<div class="container">
		<div class="">
<form method="GET" action="index.php">
<fieldset>
	<legend><span style="color:blue;"><h1>Login</h1></span></legend>
	<forms>
		Username:<br>
		<input type="text" name="Name" required>
		<br>
		<br>
        Password:<br>
        <input type="password" name="password" required><br>
        <br>
        <br>
        <a href="home.php"><input type="submit" name="Login" value="Login"></a>

        <br>	
        <br>

       
	</forms>
  </fieldset>
<a href="create.php"><span style="color:blue;"><h2>Create new account</h2></span></a> 
<?php 

$psd = $_GET['password'];
if(strlen($psd)<7){
	echo "Use at least 7 characters!";
}

 ?>
</div>
</div>
</body>
</html>