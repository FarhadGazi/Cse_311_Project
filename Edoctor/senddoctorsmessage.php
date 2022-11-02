<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","doctor");
error_reporting(0);

?>


<html>
<head>
</head>
<body>
<form action="" method="GET">
DoctorName <input type="text" name="DoctorName" value=""/><br><br>
Message <input type="text" name="Message" value=""/><br><br>
PatientName <input type="text" name="PatientName" value=""/><br><br>

<input type="submit" name="submit" value="Submit"/>
</form>

<?php
if($_GET['submit'])
{
$rn=$_GET['DoctorName'];
$sn=$_GET['Message'];
$cl=$_GET['PatientName'];

if($rn!="" && $sn!=""  )
{
$query="INSERT INTO doctormessage VALUES ('$rn','$sn','$cl')";
$data=mysqli_query($db,$query);
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
