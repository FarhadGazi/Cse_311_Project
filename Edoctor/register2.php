<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","doctor");
if(isset($_POST['register_btn']))
{
    $PatientName=mysqli_real_escape_string($db,$_POST['PatientName']);
    $Email=mysqli_real_escape_string($db,$_POST['Email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']); 
$Address=mysqli_real_escape_string($db,$_POST['Address']); 	
    $query = "SELECT * FROM patient WHERE PatientName = '$PatientName'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                //Creating alert box
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO patient(PatientName, Email, password ,Address) VALUES('$PatientName','$Email','$password','$Address')"; 
                mysqli_query($db,$sql);  
                $_SESSION['message']="You are now logged in"; 
                $_SESSION['PatientName']=$PatientName;
                header("location:home2.php");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>


<!DOCTYPE html>


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
  <!-- Collect the nav links, forms, and other content for toggling -->
    
      <ul class="nav navbar-nav center">
     <li><a href="login.php" style="background-color:pink">DoctorLogIN</a></li>
        <li><a href="register.php" style="background-color:red"> DoctorSignUp</a></li>
		 <li><a href="login2.php" style="background-color:blue">PatientLogIN</a></li>
        <li><a href="register2.php" style="background-color:green">PatientSignUp</a></li>
		 <li><a href="adminlogin.php" style="background-color:blue">AdminLogIN</a></li>
        <li><a href="adminregister.php" style="background-color:green">AdminSignUp</a></li>
      </ul>


  </div>
</nav>




 <div class="col-md-6 col-md-offset-2">

<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="register2.php">
  <table>
     <tr>
           <td>PatientName : </td>
           <td><input type="text" name="PatientName" class="textInput"></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="Email" class="textInput"></td>
     </tr>
      <tr>
           <td>password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput"></td>
     </tr>
	  <tr>
           <td>Address: </td>
           <td><input type="text" name="Address" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
    </table>

</form>
</div>

</main>
</div>

</body>
</html>




