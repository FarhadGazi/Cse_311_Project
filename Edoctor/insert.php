<?php
include("connection.php");
error_reporting(0);
?>



<html>
<head>
</head>
<body>
<form action="" method="GET">
First Name <input type="text" name="firstname" value=""/><br><br>
Last Name <input type="text" name="lastname" value=""/><br><br>
Contact Number <input type="text" name="contactnumber" value=""/><br><br>
<input type="submit" name="submit" value="Submit"/>
</form>

<?php
if($_GET['submit'])
{
$rn=$_GET['firstname'];
$sn=$_GET['lastname'];
$cl=$_GET['contactnumber'];
if($rn!="" && $sn!="" && $cl!="" )
{
$query="INSERT INTO STUDENT VALUES ('$rn','$sn','$cl')";
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
</body>
</html>
