<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('db_connection.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_table);
 
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
$sql = "INSERT INTO medicalrecords (location, responsive_doctor, issue_description, diagnosis, prescribed_solution) VALUES ('$location', '$responsive_doctor', '$issue_description', '$diagnosis', '$prescribed_solution')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: medical-record.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>