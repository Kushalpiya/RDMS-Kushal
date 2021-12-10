<?php

include_once('function.php');

$insertdata = new DB_con();

if (isset($_POST['insert'])) {
    $name = $_POST['internName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];
    $hobby = $_POST['hobby'];

    $sql = $insertdata->add($name, $age, $gender, $designation, $hobby);

    if ($sql) {
        echo "<script>alert('Record Inserted Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='index.php'</script>";
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
        <a href="index.php" class="btn btn-primary mt-4">Go Back</a>
        <h1 class="text-center mt-3">Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="internName" class="form-label">Intern Name:</label>
                <input type="text" class="form-control" name="internName" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="me-3">Gender:</label>
                <input type="radio" class="form-check-input" name="gender" value="male" required>
                <label for="male" class="form-check-label me-4">Male</label>

                <input type="radio" class="form-check-input" name="gender" value="female" required>
                <label for="female" class="form-check-label me-4">Female</label>

                <input type="radio" class="form-check-input" name="gender" value="other" required>
                <label for="other" class="form-check-label me-4">Other</label>
            </div>
            <div class="mb-3">
                <label for="designation">Designation:</label>
                <select name="designation" class="form-select" requireed>
                    <option selected value="">Select Designation</option>
                    <option value="Intern">Intern</option>
                    <option value="Employee">Employee</option>
                    <option value="manager">Manager</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hobby">Hobby:</label>
                <textarea class="form-control" name="hobby" placeholder="Enter your hobbies"></textarea>
                <!-- <input type="text" class="form-control" name="hobby"> -->
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
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