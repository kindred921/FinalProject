<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create Announcement</title>
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
  	<h2>Create a New Announcement</h2>
  </div>
	
  <form method="post" action="registerAnnouncement.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Date</label>
  	  <input type="date" name="date">
  	</div>
  	  	<div class="input-group">
  	  <label>Subject</label>
  	  <input type="text" name="subject">
  	</div>
  	
  	  	<div class="input-group">
  	  <label>Body</label>
  	  <input type="textarea" name="body">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="Submit">Submit</button>
  	</div>

  </form>
</body>
</html>