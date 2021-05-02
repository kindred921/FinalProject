<?php
//including the database connection file
include("databaseConnection.php");

//getting id of the data from url
$announcementID = $_GET['announcementID'];

//deleting the row from table
$sql = "DELETE FROM announcements WHERE announcementID=:announcementID";
$query = $conn->prepare($sql);
$query->execute(array(':announcementID' => $announcementID));

//redirecting to the account management
header("Location:announcements.php");
?>