<?php include('databaseConnection.php') ?>
<?php  
 session_start();  
 $host = "localhost";  
 $email = "root";  
 $password = "";  
 $database = "employee_management_system";  
 $message = "";  

 try  
 {  
      $conn = new PDO("mysql:host=$host; dbname=$database", $email, $password);  
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM employee WHERE email = :email AND password = :password";  
                $statement = $conn->prepare($query);  
                $statement->execute(  
                     array(  
                          'email'     =>     $_POST["email"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];  
                     header("location:loginSuccess.php");  
                }  
                else  
                {  
                     $message = '<label>The username or password provided is incorrect.</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<!-- Top Menu Bar -->
	<div class ="navbar">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="createAccount.php">Create Account</a></li>
					<li><a href="accountManagement.php">Account Management</a></li>
					<li><a href="booths.php">Booths</a></li>
					<li><a href="announcements.php">Announcements</a></li>
					<li><a href="login.php" class="button special">Log In</a></li>
				</ul>
		</div>		
			
 
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
            <div class = "header">Log In</div> 
                <form method="post">  
                <div class="input-group">
                     <label>Email</label>  
                     <input type="text" name="email" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     </div>
                     <div class="input-group">
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </div></form>  
            
  	<p><center>
  		Don't have an account yet? <a href="createAccount.php">Sign up Here</a>
  	</center></p>

</body>
<!-- https://www.webslesson.info/2016/06/php-login-script-using-pdo-with-session.html -->
</html>