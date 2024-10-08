<?php
include('config/db_connect.php'); // Ensure this file connects to the database

// Fetch data from the database
$sql_query = "SELECT id, name, gender, age, designation, address FROM employees";
$resultset = mysqli_query($conn, $sql_query) or die("database error:" . mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Editable Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Live Editable Table with jQuery, PHP, and MySQL</h2>
    <table id="data_table" class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Designation</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($developer = mysqli_fetch_assoc($resultset)) {
                echo '<tr id="' . $developer['id'] . '">';
                echo '<td>' . $developer['id'] . '</td>';
                echo '<td>' . $developer['name'] . '</td>';
                echo '<td>' . $developer['gender'] . '</td>';
                echo '<td>' . $developer['age'] . '</td>';
                echo '<td>' . $developer['designation'] . '</td>';
                echo '<td>' . $developer['address'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<script type="text/javascript" src="js/custom_table_edit.js"></script>
</body>
</html>
