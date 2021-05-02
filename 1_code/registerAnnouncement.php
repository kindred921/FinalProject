<?php
//including the database connection file
include_once("databaseConnection.php");

//$sql = "";
//$dbConn = "";
//$query = "";


if(isset($_POST['Submit'])) {
    $date = $_POST['date'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    
    // checking empty fields
    // if(empty($firstName) || empty($lastName) || empty($email)) || empty($password)) {
    
    //      if(empty($firstName)) {
    //          echo "<font color='red'>First Name field is empty.</font><br/>";
    //      }
    
    //     if(empty($lastName)) {
    //          echo "<font color='red'>Last Name field is empty.</font><br/>";
    //      }
    
    //      if(empty($email)) {
    //         echo "<font color='red'>Email field is empty.</font><br/>";
    //     }
    //
    //     if(empty($password)) {
    //          echo "<font color='red'>Password field is empty.</font><br/>";
    //      }
    //link to the previous page
    //      echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    
    //    else {
    // if all the fields are filled (not empty)
    
    //insert data to database
    $sql = "INSERT INTO announcements(date, subject, body)
        VALUES(:date,:subject, :body)";
    $query = $conn->prepare($sql);
    
    $query->bindparam(':date', $date);
    $query->bindparam(':subject', $subject);
    $query->bindparam(':body', $body);
    $query->execute();
    
    
    //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='announcements.php'>View Result</a>";
}
//}
?>
