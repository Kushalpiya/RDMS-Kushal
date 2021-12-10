<?php
/* MySQL server connection. */
$mysqli = new mysqli("localhost", "root", "");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// create database query execution
$sql = "CREATE DATABASE intern_125";
// if($mysqli->query($sql) === true){
//     echo "Database created successfully";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
// }
if ($mysqli->query($sql) === true) {
    echo "<script>alert('Database Created Successfully!');</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>