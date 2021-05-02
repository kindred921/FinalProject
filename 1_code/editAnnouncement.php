<?php
// including the database connection file
include_once("databaseConnection.php");

if(isset($_POST['update']))
{
    $announcementID = $_POST['announcementID'];
    
    $date=$_POST['date'];
    $subject=$_POST['subject'];
    $body=$_POST['body'];
    
    // checking empty fields
    if(empty($date) || empty($subject) || empty($body)) {
        
        if(empty($date)) {
            echo "<font color='red'>Date field is empty.</font><br/>";
        }
        
        if(empty($subject)) {
            echo "<font color='red'>Subject field is empty.</font><br/>";
        }
        
        if(empty($body)) {
            echo "<font color='red'>Body field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $sql = "UPDATE announcements SET date=:date, subject=:subject,
        body=:body WHERE announcementID=:announcementID";
        $query = $conn->prepare($sql);
        
        $query->bindparam(':date', $date);
        $query->bindparam(':subject', $subject);
        $query->bindparam(':body', $body);
        $query->execute();
        
        
        //redirectig to account management page again
        header("Location: announcements.php");
    }
}
?>
<?php
//getting id from url
$announcementID = $_GET['announcementID'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM announcements WHERE announcementID=:announcementID";
$query = $conn->prepare($sql);
$query->execute(array(':announcementID' => $announcementID));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $date = $row['date'];
    $subject = $row['subject'];
    $body = $row['body'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="editAnnouncement.php">
        <table border="0">
            <tr> 
                <td>Date</td>
                <td><input type="date" name="date" value="<?php echo $date;?>"></td>
            </tr>
            <tr> 
                <td>Subject</td>
                <td><input type="text" name="subject" value="<?php echo $subject;?>"></td>
            </tr>
            <tr> 
                <td>Body</td>
                <td><input type="text" name="body" value="<?php echo $body;?>"></td>
            </tr>
            
            <tr>
                <td><input type="hidden" name="announcementID" value=<?php echo $_GET['announcementID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>