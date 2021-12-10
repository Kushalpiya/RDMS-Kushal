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
        <h1 class="text-center mt-5">Intern 125</h1>
        <hr>
        <a href="db.php" class="btn btn-success">Create Database</a>
        <a href="table.php" class="btn btn-success">Create Table</a>
        <a href="insert.php" class="btn btn-success">Insert Data</a>
        <a href="index.php" class="btn btn-success">View All List</a>
        <a href="filter_female.php" class="btn btn-success">View Female List</a>
        <a href="filter_male.php" class="btn btn-success">View Male List</a>
        <a href="filter_other.php" class="btn btn-success">View Other List</a>
        <a href="../task_2/index.php" class="btn btn-success">Task 2</a>
        <?php
        /* MySQL server connection. */
        $mysqli = new mysqli("localhost", "root", "", "intern_125");

        // Check connection
        if ($mysqli === false) {
            die("ERROR: Could not connect. " . $mysqli->connect_error);
        }

        // select query execution 
        $sql = "SELECT * FROM interns WHERE gender = 'male' ORDER BY intern_name ASC";
        if ($result = $mysqli->query($sql)) {
            if ($result->num_rows > 0) {
        ?>
                <table id="mytable" class="table table-bordered table-striped mt-2 text-center">
                    <thead>
                        <th>#</th>
                        <th>Intern Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Designation</th>
                        <th>Hobby</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_array()) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['intern_name']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['designation']; ?></td>
                                <td><?php echo $row['hobby']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
        <?php
            }
        }
        ?>
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