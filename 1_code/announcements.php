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

$result = $conn->query("SELECT * FROM announcements ORDER by announcementID ASC");
//do ascending instead of descending, so that the newest announcement will appear first in the list

?>

<!----------Create Table---------//-->
<br>
<a href="createAnnouncement.php"><center><button>Add New Announcement</button></center></a><br/><br/>
 
    <table width='100%' border=0>
 
    <tr bgcolor='#CCCCCC'>
        <td>Announcement ID</td>
        <td>Date</td>
        <td>Subject</td>
        <td>Body</td>
        <td>Update</td>
    </tr>
    <?php     
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
        echo "<tr>";
        echo "<td>".$row['announcementID']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['subject']."</td>";    
        echo "<td>".$row['body']."</td>";
        echo "<td><a href=\"editAnnouncement.php?announcementID=$row[announcementID]\">Edit</a> | <a href=\"deleteAnnouncement.php?announcementID=$row[announcementID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
    </table>
    
</body>
</html>