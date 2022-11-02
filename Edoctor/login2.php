<?php
session_start();
if(  isset($_SESSION['PatientName']) )
{
  header("location:home2.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","doctor");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $PatientName=mysqli_real_escape_string($db,$_POST['PatientName']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM patient WHERE  PatientName='$PatientName' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['PatientName']=$PatientName;
            header("location:home2.php");
        }
       else
       {
              $_SESSION['message']="PatientName and Password combiation incorrect";
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
<form method="post" action="login2.php">
  <table>
     <tr>
           <td>PatientName : </td>
           <td><input type="text" name="PatientName" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="login_btn" class="Log In"></td>
     </tr>
 
</table>
</form>
</div>

</main>
</div>

</body>
</html>
