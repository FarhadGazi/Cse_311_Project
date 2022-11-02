<?php


//connect to database
$conn=mysqli_connect("localhost","root","","doctor");


?>
<!DOCTYPE html>

<head>
  <title>E-Doctor</title>
 <body style="background-color:maroon;">  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

</head>
<body>

<div class="container">
  <hgroup>
    <h1 class="site-title" style="text-align: center; color: green;">E-Doctor</h1><br>
  </hgroup>

<br>




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
	<form action="" method="GET">
<input type="text" name="PatientName" placeholder="PatientName" value="" style="width:175px ; color: red;"  /><br><br>
 <input type="email" name="Email" placeholder="Email" value="" style="width:175px ; color: red;"   /><br><br>
 <input type="password" name="password" placeholder="password" value="" style="width:175px ; color: red;"   /><br><br>
  



<input type="submit" name="submit" value="Submit" style="color:GoldenRod ;"/>

</form>

<?php
if(isset($_GET['submit']))
{
$rn=$_GET['PatientName'];
$rn1=$_GET['Email'];
$sn=$_GET['password'];



if($rn!="" && $rn1!="" && $sn!="" )
{
$query="INSERT INTO patient VALUES ('$rn','$rn1','$sn')";
$data=mysqli_query($conn,$query);
if($data)
{
echo "Data Inserted into database";
}

}
else 
{
echo "All fields are required";
}
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
