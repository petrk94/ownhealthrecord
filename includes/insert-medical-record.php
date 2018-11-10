<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('db_connect.php');

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$location = $mysqli->real_escape_string($_REQUEST['location']);
$responsive_doctor = $mysqli->real_escape_string($_REQUEST['responsive_doctor']);
$issue_description = $mysqli->real_escape_string($_REQUEST['issue_description']);
$diagnosis = $mysqli->real_escape_string($_REQUEST['diagnosis']);
$prescribed_solution = $mysqli->real_escape_string($_REQUEST['prescribed_solution']);



// Attempt insert query execution
$sql = "INSERT INTO medicalrecords (location, responsive_doctor, issue_description, diagnosis, prescribed_solution) VALUES (AES_ENCRYPT ('$location','$SECRET'), AES_ENCRYPT('$responsive_doctor','$SECRET'), AES_ENCRYPT('$issue_description','$SECRET'), AES_ENCRYPT('$diagnosis','$SECRET'), AES_ENCRYPT('$prescribed_solution','$SECRET'))";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: ../medical/medical-record.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>