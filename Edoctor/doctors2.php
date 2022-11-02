<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","doctor");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Doctor</title>
 <body style="background-color:maroon;">  
 
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

	
<?php

$conn=mysqli_connect("localhost","root","","doctor");


$query = "SELECT DoctorName,Email,speciality,Address FROM doctor ";
$result = mysqli_query($conn,$query) or die( mysqli_error($conn));

while ($row=mysqli_fetch_array($result)){
	echo '<button style="background: orange;" value="'.$row['DoctorName'].'"> ' .$row['DoctorName'].' </button>';

	echo '<button style="background: orange;" value="'.$row['Email'].'"> ' .$row['Email'].' </button>';
	echo '<button style="background: red;" value="'.$row['speciality'].'"> ' .$row['speciality'].' </button>';

	echo '<button style="background: blue;" value="'.$row['Address'].'"> ' .$row['Address'].' </button>';
	echo "<br />";	
	
}
?>	
</form>	
</div>
<a href="logout.php">Log Out</a>
</div>
</main>
</div>

</body>
</html>
