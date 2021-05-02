<?php
//including the database connection file
include("databaseConnection.php");

//getting id of the data from url
$userID = $_GET['userID'];

//deleting the row from table
$sql = "DELETE FROM employee WHERE userID=:userID";
$query = $conn->prepare($sql);
$query->execute(array(':userID' => $userID));

//redirecting to the account management
header("Location:accountManagement.php");
?>