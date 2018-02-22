<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		.rr{text-align:  center;}
		h1{text-align: center;}
	</style>
</head>
<body>
<div class="LL">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><h2>KULAMOTO SECONDARY SCHOOL</h2></a>
		</div><br>
		<br><br>
		<br>
		<br>
		<br>

		<div class="rr">
		<img src="john.jpeg" width="600px">
		</div>

		<div class="row">
    <div class="col-sm-4">
		<h3><p>School Vision:<br>
		To nurture an exemplary person in future.</p></h3>
	</div>    
  <div class="col-sm-4">
  	<h3><p>School motto:<br>
  	Committed to excellence.</p></h3>
</div>
<div class="col-sm-4"> 
	<h3><p>School Mission:<br>
	 To be the best.</p></h3>
	</div>
<br><br>
<br><br>
<br><br>
<div class="jumbotron">
		<div class="container-fluid">
			<h1>STUDENT'S MARKS</h1>
			<form method="GET">

				MATHS      :<br> <input type="number" name="MATHS"> <br><br>
				ENGLISH    :<br> <input type="number" name="ENGLISH"> <br><br>
				KISWAHILI  :<br> <input type="number" name="KISWAHILI"> <br><br>
				BIOLOGY    :<br> <input type="number" name="BIOLOGY"> <br><br>
				PHYSICS    :<br> <input type="number" name="PHYSICS"> <br><br>
				CHEMISTRY  :<br> <input type="number" name="CHEMISTRY"> <br><br>
				COMPUTER   :<br> <input type="number" name="COMPUTER"> <br><br>
			    CRE        :<br> <input type="number" name="CRE"> <br><br>
			
             <br>
            <button type="submit" class="btn-success">SUBMIT</button>
  	<button type="reset" class="btn-danger">RESET</button>
        
			</form>

		
	<br>
	<?php 

	$eng=$_GET["ENGLISH"];
	$mat=$_GET["MATHS"];
	$kis=$_GET["KISWAHILI"];
	$bio=$_GET["BIOLOGY"];
	$chem=$_GET["CHEMISTRY"];
	$phy=$_GET["PHYSICS"];
	$cre=$_GET["CRE"];
	$comp=$_GET["COMPUTER"];


    $average=($eng+$mat+$kis+$bio+$chem+$phy+$cre+$comp)/8;
    echo $average;
    echo "<br>";
	 
	 if ($average>=80) {
	 	# code...
	 	echo "You have an A";
	 } elseif ($average>=74) {
	 	# code...
	 	echo "A-";
	 } elseif ($average>=69) {
	 	# code...
	 	echo "B+";
	 }elseif ($average>=64) {
	 	# code...
	 	echo "B";
	 } elseif ($average>=59) {
	 	# code...
	 	echo "B-";
	 } elseif ($average>=54) {
	 	# code...
	 	echo "C+";
	 }elseif ($average>=49) {
	 	# code...
	 	echo "C";
	 }elseif ($average>=44) {
	 	# code...
	 	echo "D+";
	 }elseif ($average>=39) {
	 	# code...
	 	echo "D";
	 }elseif ($average>=34) {
	 	# code...
	 	echo "D-";
	 }else{
	 	# code...
	 	echo "E";
	 }

	 ?>				
	



</div>
		
	</div>

</body>
</html>