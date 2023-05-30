<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$id = $_POST['id'];

$sq1 = "SELECT * FROM employee WHERE employee_id=$id";
try {
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
        while ($info = mysqli_fetch_array($q1)) {
            echo "<br>Emmployee_id: " . $info['employee_id'];
            echo "<br>Employee_name: " . $info['employee_name'];
            echo "<br>salary: " . $info['salary'];
            echo "<br>Room_no: " . $info['roomno'];
            echo "<br>";
        }
    } else
        echo "not found";
} catch (Exception $e) {
    echo "exception occurs";
}
