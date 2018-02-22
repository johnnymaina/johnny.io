	<!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
  .container{background-color: #039be5;
             text-align: center;}
}
.gg{text-align: center;}
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
    <br><br>
  <div class="gg">
    <img src="john.jpeg" width="400px">
  </div>
<br><br>
<br><br>

     <div class="container">
<fieldset>
  <legend><span style="color:blue;"><h1>Create new account</h1></span></legend>
 
    <form method="GET" action="index.php">
    Name:<br>
    <input type="text" name="name" required>
    <br>
   
   <br>
    Gender:<br>
    <input type="radio" name="gender" value="male">male
    <br>
    <input type="radio" name="gender" value="female">female
    <br>
    
    Phone Number:<br>
    <select>
      <option value="+254">+254</option>
        <option value="+274">+274</option>
        <option value="+234">+234</option>
    </select>
    <input type="text" name="phonenumber" required><br>
    Email:<br>
    <input type="email" name="email" required>
    <br>
    Password:<br>
    <input type="Password" name="Password" required><br>
    Confirm password:<br>
    <input type="password" name="confirm password" required>
    <br>
    <?php 
      $ir=$_GET['password'];
      $ae=$_GET['confirm password'];
      if ($ir===$ae) {
        # code...
        echo "Login successful";
      } else {
        # code...
        echo "Password Mismatch";
      }
    
     ?>
    <br><br>
    <div class="btn-group ">
  <button class="btn-success">Submit</button>
  <button class="btn-danger" >Reset</button>

</form>
 </fieldset>
</div>
  </body>
  </html>




  