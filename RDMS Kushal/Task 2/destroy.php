<?php

include_once('function.php');

if(isset($_GET['del'])){
    $userid = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->destroy($userid);

    if ($sql) {
        echo "<script>alert('Deleted Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }

}

?>