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
    <h4>Welcome <?php echo $_SESSION['PatientName']; ?></h4>
	<form action="home2.php">
	<font size="10px"><a href="doctors.php" style="background-color:pink">Check doctors</a></font>	
	<br></br>
	<font size="10px"><a href="search.php" style="background-color:orange">Search doctors</a></font>
	<br></br>	
	<font size="10px"><a href="sendpatientmessage.php" style="background-color:red">Send message</a></font>	
	<br></br>	
	<font size="10px"><a href="checkdoctormessage.php" style="background-color:blue">Check message</a></font>	
	<br></br>
	<font size="10px"><a href="searchdisease.php" style="background-color:orange">Doctors by disease</a></font>
	<br></br>
</form>
	
</div>
<a href="logout.php">Log Out</a>
</div>
</main>
</div>

</body>
</html>
