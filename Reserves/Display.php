<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");
$sq1 = "SELECT customer_id,roomno,customer_name,price FROM customer NATURAL JOIN room";
try {
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
        while ($info = mysqli_fetch_array($q1)) {
            echo "<br>Customer ID: " . $info['customer_id'];
            echo "<br>Room No: " . $info['roomno'];
            echo "<br>Customer Name: " . $info['customer_name'];
            echo "<br>Price:" . $info['price'];
            echo "<br><br>";
        }
    } else
        echo "error";
} catch (Exception $e) {
    echo "exception occurs";
}
mysqli_close($conn);
