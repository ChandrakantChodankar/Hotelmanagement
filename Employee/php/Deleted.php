<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");
$employee_id = $_POST['delete'];

$sq1 = "DELETE FROM employee WHERE employee_id=$employee_id";
$q1 = mysqli_query($conn, $sq1);
try {
    if ($q1) {
        echo "Deleted succesfully<br>";
    } else
        echo "Error while deleting";
} catch (Exception $e) {
    echo "exception occur";
}
