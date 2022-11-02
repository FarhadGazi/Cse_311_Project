
<?php
$conn=mysqli_connect("localhost","root","","doctor");
error_reporting(0);
$_GET['rn'];
$_GET['sn'];

?>



<html>
<head>
</head>
<body>
<form action="" method="GET">
PatientName <input type="text" name="PatientName" value="<?php echo $_GET['rn']; ?>"/><br><br>
Email <input type="email" name="Email" value="<?php echo $_GET['sn']; ?>"/><br><br>

<input type="submit" name="submit" value="Update"/>
</form>

<?php
if($_GET['submit'])
{
$PatientName=$_GET['PatientName'];
$Email=$_GET['Email'];

$query = "UPDATE patient SET Email='$Email' WHERE PatientName='$PatientName' ";
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
