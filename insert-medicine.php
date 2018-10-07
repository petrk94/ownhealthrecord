<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('dbconnection.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_table);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$medication_name = $mysqli->real_escape_string($_REQUEST['medication_name']);
$medication_dosis = $mysqli->real_escape_string($_REQUEST['medication_dosis']);
$medication_time = $mysqli->real_escape_string($_REQUEST['medication_time']);
$medication_period = $mysqli->real_escape_string($_REQUEST['medication_period']);
$medication_link = $mysqli->real_escape_string($_REQUEST['medication_link']);
$medication_warnings = $mysqli->real_escape_string($_REQUEST['medication_warnings']);



// Attempt insert query execution
$sql = "INSERT INTO medicine (medication_name, medication_dosis, medication_time, medication_period, medication_link, medication_warnings) VALUES ('$medication_name', '$medication_dosis', '$medication_time', '$medication_period', '$medication_link', '$medication_warnings')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: medicine.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>