<html>
<head>
<title>E-Doctor</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
<tr>
<th>PatientName</th>
<th>Email</th>
<th>Delete</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","doctor");
$sql="SELECT * FROM doctor";
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($records))
{
	echo "<tr>";
echo "<td>".$row['DoctorName']."</td>";
echo "<td>".$row['Email']."</td>";
echo "<td><a href=delete2.php?id=".$row['DoctorName'].">Delete</a></td>";
}
?>

</head>
</html>
