<?php
// including the database connection file
include_once("databaseConnection.php");

if(isset($_POST['update']))
{
    $userID = $_POST['userID'];
    
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $DOB=$_POST['DOB'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $active=$_POST['active'];
    $startDate=$_POST['startDate'];
    $endDate=$_POST['endDate'];
    $boothID=$_POST['boothID'];
    
    // checking empty fields
    if(empty($firstName) || empty($lastName) || empty($email)) {
        
        if(empty($firstName)) {
            echo "<font color='red'>First Name field is empty.</font><br/>";
        }
        
        if(empty($lastName)) {
            echo "<font color='red'>Last Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $sql = "UPDATE employee SET firstName=:firstName, lastName=:lastName, 
        DOB=:DOB, phone=:phone, email=:email, active=:active, startDate=:startDate,
        endDate=:endDate, boothID=:boothID WHERE userID=:userID";
        $query = $conn->prepare($sql);
        
        $query->bindparam(':userID', $userID);
        $query->bindparam(':firstName', $firstName);
        $query->bindparam(':lastName', $lastName);
        $query->bindparam(':DOB', $DOB);
        $query->bindparam(':phone', $phone);
        $query->bindparam(':email', $email);
        $query->bindparam(':active', $active);
        $query->bindparam(':startDate', $startDate);
        $query->bindparam(':endDate', $endDate);
        $query->bindparam(':boothID', $boothID);
        $query->execute();
        

        //redirectig to account management page again
        header("Location: accountManagement.php");
    }
}
?>
<?php
//getting id from url
$userID = $_GET['userID'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM employee WHERE userID=:userID";
$query = $conn->prepare($sql);
$query->execute(array(':userID' => $userID));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $DOB = $row['DOB'];
    $phone = $row['phone'];
    $email = $row['email'];
    $active = $row['active'];
    $startDate = $row['startDate'];
    $endDate = $row['endDate'];
    $boothID = $row['boothID'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="editAccount.php">
        <table border="0">
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="firstName" value="<?php echo $firstName;?>"></td>
            </tr>
            <tr> 
                <td>Last Name</td>
                <td><input type="text" name="lastName" value="<?php echo $lastName;?>"></td>
            </tr>
            <tr> 
                <td>Date of Birth</td>
                <td><input type="text" name="DOB" value="<?php echo $DOB;?>"></td>
            </tr>
            <tr>
                        <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
                        <tr> 
                <td>Active</td>
                <td><input type="text" name="active" value="<?php echo $active;?>"></td>
            </tr>
                        <tr> 
                <td>Start Date</td>
                <td><input type="text" name="startDate" value="<?php echo $startDate;?>"></td>
            </tr>
                        <tr> 
                <td>End Date</td>
                <td><input type="text" name="endDate" value="<?php echo $endDate;?>"></td>
            </tr>
            
            
            <tr>
                <td><input type="hidden" name="userID" value=<?php echo $_GET['userID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>