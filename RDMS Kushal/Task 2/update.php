<?php

include_once('function.php');

$updatedata = new DB_con();

if(isset($_POST['update'])){
    $userid = $_GET['id'];
    $name = $_POST['internName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];
    $hobby = $_POST['hobby'];

    $sql = $updatedata->update($name, $age, $gender, $designation, $hobby,$userid);

    if ($sql) {
        echo "<script>alert('Updated Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='update.php'</script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Intern 125</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Update Page</h1>
        <hr>
        <?php

        $userid = $_GET['id'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonerecord($userid);
        while($row = mysqli_fetch_array($sql)){

        ?>

        <pre><?php print_r($row); ?></pre>


        <form action="" method="post">
            <div class="mb-3">
                <label for="internName" class="form-label">Intern Name:</label>
                <input type="text" class="form-control" name="internName" value="<?php echo $row['intern_name'];?>" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" name="age" value="<?php echo $row['age'];?>" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="me-3">Gender:</label>
                <input type="radio" class="form-check-input" name="gender" value="male" <?php if($row['gender']=="male"){ echo "checked";}?> required>
                <label for="male" class="form-check-label me-4">Male</label>

                <input type="radio" class="form-check-input" name="gender" value="female" <?php if($row['gender']=="female"){ echo "checked";}?> required>
                <label for="female" class="form-check-label me-4">Female</label>

                <input type="radio" class="form-check-input" name="gender" value="other" <?php if($row['gender']=="other"){ echo "checked";}?> required>
                <label for="other" class="form-check-label me-4">Other</label>
            </div>
            <div class="mb-3">
                <label for="designation">Designation:</label>
                <select name="designation" class="form-select" requireed>
                    <option selected value="">Select Designation</option>
                    <option value="Intern" <?php if($row['designation']=="intern"){ echo "selected";}?>>Intern</option>
                    <option value="Employee" <?php if($row['designation']=="employee"){ echo "selected";}?>>Employee</option>
                    <option value="manager" <?php if($row['designation']=="manager"){ echo "selected";}?>>Manager</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hobby">Hobby:</label>
                <textarea class="form-control" name="hobby"   placeholder="Enter your hobbies"><?php echo $row['hobby'];?></textarea>
                <!-- <input type="text" class="form-control" name="hobby"> -->
            </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>