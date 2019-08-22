<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/semantic.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="css/mystyle.css"  rel='stylesheet' type='text/css'> 
<title>Login page</title>
</head>

<body>
<?php
error_reporting(E_ALL & ~ E_NOTICE);
session_start();
 $pagetitle="LogIn Page";
?>
<?php
       if ($_POST['submit'])
       {
        $username=($_POST['username']);
        $password=($_POST['password']);
		include ("connection.php");
		if ($conn-> connect_error)
			{
				die("connection failed:".$conn-> connect_error);
			}

        $sql="SELECT id, username, password FROM login WHERE username='$username' AND password='$password'";
        $query=mysqli_query($conn, $sql);
        if($query)
        {
          $row= mysqli_fetch_row($query);
          $userId= $row[0];
          $dbusername=$row[1];
          $dbpassword=$row[2];
        }
           
           if($username== $dbusername && $password== $dbpassword)
           {
          $_SESSION['username']=$username;
          $_SESSION['id']=$userId;
		  
		
          header('Location:menu.php');
        }
        else
        {
            echo "<span style='color:red;'>User name or password is incorrect!</span>";
          }    
} 
?>
       
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 40px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Welcome to LOG IN</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
 </div>
     <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User name" name="username" type="username" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
                                </div>
                                <button type="sumbit" style="background-color:black" name="submit" value="login" class="btn btn-lg btn-success btn-block">Login</button>  
							<!-- 	<center><h4>Or</h4></center> -->
								 
                        </form>
						<!-- <button type="sumbit" style="background-color:black" name="register" value="login" class="btn btn-lg btn-warning btn-block"><a href="register.php">Register</a></button> -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
