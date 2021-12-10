<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'intern_125');

class DB_con
{
    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;

        if (mysqli_connect_errno()) {
            echo "failed to connect to database: " . mysqli_connect_errno();
        }
    }

    public function add($name, $age, $gender, $designation, $hobby)
    {
        $result = mysqli_query($this->dbcon, "INSERT INTO interns(intern_name, age, gender, designation, hobby) VALUES ('$name', $age,'$gender','$designation','$hobby')");
        return $result;
    }
    public function show()
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM interns");
        return $result;
    }
    public function fetchonerecord($userid)
    {
        $result = mysqli_query($this->dbcon, "SELECT * FROM interns WHERE id = '$userid'");
        return $result;
    }
    public function update($name, $age, $gender, $designation, $hobby, $userid)
    {
        $result = mysqli_query($this->dbcon, "UPDATE interns SET 
        intern_name='$name',
        age=$age,
        gender='$gender',
        designation='$designation',
        hobby='$hobby'
        WHERE id = '$userid'
        ");
        return $result;
    }
    public function destroy($userid){
        $deleterecord = mysqli_query($this->dbcon,"DELETE FROM interns WHERE id = '$userid'");
        return $deleterecord;
    }
}
