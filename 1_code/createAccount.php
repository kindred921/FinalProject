<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title>
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
			
<!-- Create Account Form -->			
  <div class="header">
  	<h2>Create a New Account</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstName">
  	</div>
  	  	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastName">
  	</div>
  	  	<div class="input-group">
  	  <label>Date of Birth</label>
  	  <input type="date" name="DOB">
  	</div>
  	  	<div class="input-group">
  	  <label>Phone</label>
  	  <input type="text" name="phone">
  	</div>
  	<div class="input-group">
  	  <label>Email (Username)</label>
  	  <input type="text" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="Submit">Submit</button>
  	</div>
  	<p>
  		Already have an Account? <a href="login.php">Log In</a>
  	</p>
  </form>
</body>
</html>