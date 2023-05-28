<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$sq1 = "SELECT * FROM employee";
try {
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
        while ($info = mysqli_fetch_array($q1)) {
            echo "<br>Customer_id: " . $info['employee_id'];
            echo "<br>Customer_name: " . $info['employee_name'];
            echo "<br>phone_no: " . $info['salary'];
            echo "<br>Address: " . $info['roomno'];
            echo "<br>";
        }
    }
} catch (Exception $e) {
    echo "exception occurs";
}
mysqli_close($conn);
