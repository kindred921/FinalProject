<?php
//including the database connection file
include_once("databaseConnection.php");

//$sql = "";
//$dbConn = "";
//$query = "";


if(isset($_POST['Submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $DOB = $_POST['DOB'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
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
        $sql = "INSERT INTO employee(firstName, lastName, DOB, phone, email, password) 
        VALUES(:firstName,:lastName, :DOB, :phone, :email, :password)";
        $query = $conn->prepare($sql);
        
        $query->bindparam(':firstName', $firstName);
        $query->bindparam(':lastName', $lastName);
        $query->bindparam(':DOB', $DOB);
        $query->bindparam(':phone', $phone);
        $query->bindparam(':email', $email);
        $query->bindparam(':password', $password);
        $query->execute();
        

        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='accountManagement.php'>View Result</a>";
    }
//}
?>
