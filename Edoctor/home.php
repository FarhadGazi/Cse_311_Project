<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","doctor");


?>
<!DOCTYPE html>

<head>
  <title>E-Doctor</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

<div class="container">
 
    <h1 class="site-title" style="text-align: center; color: green;">E-Doctor</h1><br>
  

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
      <ul class="nav navbar-nav center">
      
      </ul>

    </div>
  </div>
</nav>



 <div class="col-md-6 col-md-offset-4">
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h1>Home</h1>
<div>
    <h4>Welcome <?php echo $_SESSION['DoctorName']; ?></h4>
	<form action="home2.php">
<font size="10px"><a href="patients.php" style="background-color:pink">Check Patients</a></font>	
<br></br>
<font size="10px"><a href="checkpatientsmessage.php" style="background-color:red">Check Message</a></font>	
<br></br>
<font size="10px"><a href="senddoctorsmessage.php" style="background-color:orange">Send Message</a></font>	
</form>
	
</div>
<a href="logout.php">Log Out</a>
</div>
</main>
</div>

</body>
</html>
