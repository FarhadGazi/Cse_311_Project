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
	// Establish mysql connection 
	
	$con = @new mysqli('localhost', 'root', '', 'doctor'); //Please change the server credential
	
	if ($con->connect_error) {
		echo "Error: " . $con->connect_error;
		exit();
		}
		

	echo '<br />';

    // Run Query
	
	if($_REQUEST['submit']){
    $name = $_POST['name'];
	
	if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
	}else{
		$make = '<h4>No match found!</h4>';
	    $select = "SELECT * FROM doctor WHERE DoctorName LIKE '%$name%'";
	    $result = mysqli_query($con, $select);
		while ($row = mysqli_fetch_array($result))
		{
			echo $row['DoctorName'];
			echo " - ";
			echo $row['speciality'];
			echo '<br />';
		}}
	
	// Close mysql connection
	mysqli_close($con);
	}

?>
</div>

</body>
</html>
