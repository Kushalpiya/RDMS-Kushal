<?php
/* MySQL server connection. */
$mysqli = new mysqli("localhost", "root", "", "intern_125");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt insert query execution
$sql = "INSERT INTO interns (intern_name, age, gender, designation, hobby) VALUES
            ('Elwood Julia', '22', 'female', 'intern', 'dancing, travelling'),
            ('Davlat Mirek', '25', 'male', 'intern', 'travelling'),
            ('Liv Alfonso', '30', 'female', 'manager', 'drawing')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
    echo "<script>window.location.href='index.php'</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>