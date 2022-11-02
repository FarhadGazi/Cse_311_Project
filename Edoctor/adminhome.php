<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","doctor");


?>
<!DOCTYPE html>
<html lang="en">
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
    <h4>Welcome </h4>
	<form action="home2.php">
<font size="10px"><a href="patients2.php" style="background-color:pink">Check Patients</a></font>	
<br></br>
<font size="10px"><a href="doctors2.php" style="background-color:pink">Check doctors</a></font>	
<br></br>
<font size="10px"><a href="addpatient.php" style="background-color:red">Add Patients</a></font>	
<br></br>
<font size="10px"><a href="adddoctor.php" style="background-color:red">Add doctors</a></font>	
<br></br>	
<font size="10px"><a href="adddoctordisease.php" style="background-color:red">Doctors + disease </a></font>	
<br></br>
<font size="10px"><a href="updatepatient.php" style="background-color:red">Update Patients</a></font>	
<br></br>
<font size="10px"><a href="updatedoctor.php" style="background-color:red">Update doctors</a></font>	
<br></br>
<font size="10px"><a href="index.php" style="background-color:blue">Delete Patients</a></font>	
<br></br>
<font size="10px"><a href="index2.php" style="background-color:blue">Delete doctors</a></font>	
<br></br>
<font size="10px"><a href="checkpatientsmessage.php" style="background-color:blue">Patients messages</a></font>	
<br></br>
<font size="10px"><a href="checkdoctormessage.php" style="background-color:blue">Doctors messages</a></font>	
<br></br>
</form>
	
</div>
<a href="logout.php">Log Out</a>
</div>
</main>
</div>

</body>
</html>
