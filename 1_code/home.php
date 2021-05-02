<!DOCTYPE HTML>
<!--
Home Page
Employee Management System
Alyssa Brumm
INFO C451
-------------------------------------------------------->
<html>
	<head>
		<title>Home</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		
	
		
		
	</head>
	<body id="top">

<!------------------- Top Menu Bar ----------------------->
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

<!-------------------- Logo Banner with Login Button -------------->
		<!-- Row 2 -->
		   <div class="banner-image">
  			<div class="banner-text">
    			<h1>Best Hairsylists Inc</h1>
    			<p>Employee Management System</p>
    			<button>Log In</button>
  			</div>
		</div>
            <!-- https://www.w3schools.com/howto/howto_css_hero_image.asp -->		

<div><center><img src="lineborder.png" alt="line border"></center>
			</div>
<!-------------------- Quick Links with Icons------------------>
<!-- Row 3 -->


<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<div class="row">
  <div class="column">
<center>
    <a href="announcements.php"><center><button>Announcements</button></center></a><br/><br/>
    <img src="hairdresser1.png" alt="hairdresser1" style="width:100%">
    
  </div>

  <div class="column">
  <a href="accountManagement.php"><center><button>Account Management</button></center></a><br/><br/>
    <img src="hairdresser2.png" alt="hairdresser2" style="width:100%"></p>
  </div>

  <div class="column">
  <a href="login.php"><center><button>Log In</button></center></a><br/><br/>
    <img src="hairdresser3.png" alt="hairdresser3" style="width:100%"></p>
  </div>
    <div class="column">
    <a href="booths.php"><center><button>Booth Map</button></center></a><br/><br/>
    <img src="hairdresser4.png" alt="hairdresser4" style="width:100%"></p>
  </div>
  </center>
</div>				
	
	
			
<!---------------------- Announcements ----------------------------->
		<!-- Row 4 -->
	<!--		<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Announcements</h2>
					
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<h3>Welcome!</h3>
								<p>Welcome to Best Hairstylists Inc's new and improved employee management system!
								With this platform, you can reserve booths and manage your employee account information.
								Please reach out to the salon owners if you have any questions.</p>
							</section>
						</div>
					 <div class="6u">
							<section class="special">
								<h3>Reminder: Maintenance April 13th 2021</h3>
								<p>The salon will be closed from 6PM-10PM for maintenance work.</p>
							</section>
						</div>
					</div>
				</div>
			</section>

			-->
	</body>
</html>
<!--
References:
Hero Image/Home Page Banner: https://www.w3schools.com/howto/howto_css_hero_image.asp 
Fixed Top Menu: https://www.w3schools.com/howto/howto_css_fixed_menu.asp
Connecting to a MYSQL Database & PDO exception: Murach pg. 127
Working with PDO: Murach pg. 622-633
Login Form & DB connection: https://code.tutsplus.com/tutorials/create-a-php-login-form--cms-33261 , Murach pg. 210-222
Getting Data from DB: Murach pg. 54
Displaying Data on webpage: Murach pg. 224-228
Sending Data to DB: Murach pg. 56
Insert/Update/Delete Statments in PHP: Murach pg. 136
-->

