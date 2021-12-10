<?php
/* MySQL server connection.*/
$mysqli = new mysqli("localhost", "root", "", "intern_125");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt create table query execution
$sql = "CREATE TABLE interns(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    intern_name VARCHAR(30) NOT NULL,
    age INT(3) NOT NULL,
    gender VARCHAR(7) NOT NULL,
    designation VARCHAR(10) NOT NULL,
    hobby VARCHAR(20) NOT NULL
    )";
// if($mysqli->query($sql) === true){
//     echo "Table created successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
// }
if ($mysqli->query($sql) === true) {
    echo "<script>alert('Table Created Successfully!');</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>