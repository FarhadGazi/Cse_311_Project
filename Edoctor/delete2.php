<?php
$con=mysqli_connect("localhost","root","","doctor");
$sql="DELETE FROM doctor WHERE DoctorName='$_GET[id]'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=index2.php");
else
	echo "Not Delete";
?>