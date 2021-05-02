<?php
$dbh = new PDO('mysql:host=localhost;dbname=employee_management_system', 'root', '');

try {
    $dbh = new PDO('mysql:host=localhost;dbname=employee_management_system', 'root', '');
    foreach($dbh->query('SELECT * from employee') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>