<?php
include('config/db_connect.php');

if ($_POST['action'] == 'edit') {
    $id = $_POST['id'];
    $column = $_POST['column'];
    $value = $_POST['value'];

    $sql = "UPDATE your_table SET $column = '$value' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
