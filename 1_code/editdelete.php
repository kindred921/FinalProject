<?php
//----------Handle Edits and Deletions from Tables---------//
include_once("databaseConnection.php");
if ($_POST['action'] == 'edit' && $_POST['id']) {
    $updateField='';
    if(isset($_POST['firstName'])) {
        $updateField.= "firstName='".$_POST['firstName']."'";
    } else if(isset($_POST['lastName'])) {
        $updateField.= "lastName='".$_POST['lastName']."'";
    } else if(isset($_POST['DOB'])) {
        $updateField.= "DOB='".$_POST['DOB']."'";
    } else if(isset($_POST['phone'])) {
        $updateField.= "phone='".$_POST['phone']."'";
    } else if(isset($_POST['email'])) {
        $updateField.= "email='".$_POST['email']."'";
    } else if(isset($_POST['active'])) {
        $updateField.= "active='".$_POST['active']."'";
    } else if(isset($_POST['startDate'])) {
        $updateField.= "startDate='".$_POST['startDate']."'";
    } else if(isset($_POST['endDate'])) {
        $updateField.= "endDate='".$_POST['endDate']."'";
    }
    if($updateField && $_POST['id']) {
        $sqlQuery = "UPDATE employee SET $updateField WHERE id='" . $_POST['id'] . "'";
        mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
        $data = array(
            "message"	=> "Record Updated",
            "status" => 1
        );
        echo json_encode($data);
    }
}
if ($_POST['action'] == 'delete' && $_POST['id']) {
    $sqlQuery = "DELETE FROM employee WHERE id='" . $_POST['id'] . "'";
    mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
    $data = array(
        "message"	=> "Record Deleted",
        "status" => 1
    );
    echo json_encode($data);
}
?>

    //Create Editable Bootstrap Table: https://webdamn.com/create-editable-bootstrap-table-with-php-mysql//