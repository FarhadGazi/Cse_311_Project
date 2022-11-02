<?php
$con=mysqli_connect("localhost","root","","doctor");
$sql="DELETE FROM patient WHERE PatientName='$_GET[id]'";
if(mysqli_query($con,$sql))
	header("refresh:1; url=index.php");
else
	echo "Not Delete";
?>