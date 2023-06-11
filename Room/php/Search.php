<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$id = $_POST['roomno'];

$sq1 = "SELECT * FROM room WHERE roomno=$id";
try {
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
        while ($info = mysqli_fetch_array($q1)) {
            echo "<br>Room Number is: " . $info['roomno'];
            echo "<br>Room Type is " . $info['roomtype'];
            echo "<br>Price is " . $info['price'];
            echo "<br>";
        }
    } else
        echo "not found";
} catch (Exception $e) {
    echo "exception occurs";
}
