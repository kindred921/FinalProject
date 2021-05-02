<?php include_once("databaseConnection.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Account Management</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body id="top">

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

$result = $conn->query("SELECT * FROM employee ORDER by userID DESC");

?>

<!----------Create Table---------//-->
<br>
<a href="createAccount.php"><center><button>Add New Account</button></center></a><br/><br/>
 
    <table width='100%' border=0>
 
    <tr bgcolor='#CCCCCC'>
        <td>User ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>DOB</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Active</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>Booth ID</td>
        <td>Update</td>
    </tr>
    <?php     
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
        echo "<tr>";
        echo "<td>".$row['userID']."</td>";
        echo "<td>".$row['firstName']."</td>";
        echo "<td>".$row['lastName']."</td>";    
        echo "<td>".$row['DOB']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['email']."</td>"; 
        echo "<td>".$row['startDate']."</td>";
        echo "<td>".$row['endDate']."</td>";
        echo "<td>".$row['boothID']."</td>"; 
        echo "<td></td>"; 
        echo "<td><a href=\"editAccount.php?userID=$row[userID]\">Edit</a> | <a href=\"deleteAccount.php?userID=$row[userID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
    </table>
    
</body>
</html>