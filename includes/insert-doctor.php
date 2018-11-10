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
$doctor_name = $mysqli->real_escape_string($_REQUEST['doctor_name']);
$doctor_type = $mysqli->real_escape_string($_REQUEST['doctor_type']);
$address = $mysqli->real_escape_string($_REQUEST['address']);
$phone = $mysqli->real_escape_string($_REQUEST['phone']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$treatment_period = $mysqli->real_escape_string($_REQUEST['treatment_period']);



// Attempt insert query execution
$sql = "INSERT INTO doctors (doctor_name, doctor_type, address, phone, email, treatment_period) VALUES (AES_ENCRYPT ('$doctor_name','$SECRET'), AES_ENCRYPT('$doctor_type','$SECRET'), AES_ENCRYPT('$address','$SECRET'), AES_ENCRYPT('$phone','$SECRET'), AES_ENCRYPT('$email','$SECRET'), AES_ENCRYPT('$treatment_period','$SECRET'))";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: ../medical/doctors-list.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>