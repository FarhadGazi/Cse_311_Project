
<?php
$conn=mysqli_connect("localhost","root","","doctor");
error_reporting(0);
$_GET['rn'];
$_GET['sn'];
$_GET['an'];
$_GET['bn'];

?>



<html>
<head>
</head>
<body>
<form action="" method="GET">
DoctorName <input type="text" name="DoctorName" value="<?php echo $_GET['rn']; ?>"/><br><br>
Email <input type="email" name="Email" value="<?php echo $_GET['sn']; ?>"/><br><br>
speciality <input type="text" name="speciality" value="<?php echo $_GET['an']; ?>"/><br><br>
Address <input type="text" name="Address" value="<?php echo $_GET['bn']; ?>"/><br><br>

<input type="submit" name="submit" value="Update"/>
</form>

<?php
if($_GET['submit'])
{
$DoctorName=$_GET['DoctorName'];
$Email=$_GET['Email'];
$speciality=$_GET['speciality'];
$Address=$_GET['Address'];

$query = "UPDATE doctor SET Email='$Email', speciality='$speciality', Address='$Address' WHERE DoctorName='$DoctorName' ";
$data = mysqli_query($conn,$query);
if($data)
{
echo "<font color='green'>Record Updated Succesfully. </a>";
}
else 
{
echo "<font color='red'>Record Not Updated.</a>";
}
}
else 
{
echo "<font color='blue'>Click on update button to save changes";
}




?>
</body>
</html>
