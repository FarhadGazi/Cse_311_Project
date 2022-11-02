<?php
session_start();
if(  isset($_SESSION['AdminName']) )
{
  header("location:adminhome.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","doctor");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $AdminName=mysqli_real_escape_string($db,$_POST['AdminName']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM admin WHERE  AdminName='$AdminName' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['AdminName']=$AdminName;
            header("location:adminhome.php");
        }
       else
       {
              $_SESSION['message']="AdminName and Password combiation incorrect";
       }
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Doctor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <hgroup>
    <h1 class="site-title" style="text-align: center; color: green;">E-Doctor</h1><br>
  </hgroup>

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav center">
         <li><a href="login.php" style="background-color:pink">DoctorLogIN</a></li>
        <li><a href="register.php" style="background-color:red"> DoctorSignUp</a></li>
		 <li><a href="login2.php" style="background-color:blue">PatientLogIN</a></li>
        <li><a href="register2.php" style="background-color:green">PatientSignUp</a></li>
		 <li><a href="adminlogin.php" style="background-color:blue">AdminLogIN</a></li>
        <li><a href="adminregister.php" style="background-color:green">AdminSignUp</a></li>
      
      </ul>

    </div>
  </div>
</nav>

<main class="main-content">
 <div class="col-md-6 col-md-offset-2">
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="adminlogin.php">
  <table>
     <tr>
           <td>AdminName : </td>
           <td><input type="text" name="AdminName" class="textInput"></td>
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
