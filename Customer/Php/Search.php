<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$id = $_POST['id'];

$sq1 = "SELECT * FROM customer WHERE customer_id=$id";
try {
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
        while ($info = mysqli_fetch_array($q1)) {
            echo "<br>Customer_id: " . $info['customer_id'];
            echo "<br>Customer_name: " . $info['customer_name'];
            echo "<br>phone_no: " . $info['phone_no'];
            echo "<br>Address: " . $info['address'];
            echo "<br>Room_no: " . $info['roomno'];
            echo "<br>";
        }
    } else
        echo "not found";
} catch (Exception $e) {
    echo "exception occurs";
}
