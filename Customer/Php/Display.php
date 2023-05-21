<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$sq1 = "SELECT * FROM customer";
try {
    $q1 = mysqli_query($conn, $sq1);
    if ($q1) {
        while ($info = mysqli_fetch_array($q1)) {
            echo "<br>Id is " . $info['customer_id'];
            echo "<br>cpu name is " . $info['customer_name'];
            echo "<br>price is " . $info['phone_no'];
            echo "<br>paltform is " . $info['address'];
            echo "<br>inclues is " . $info['roomno'];
            echo "<br>";
        }
    }
} catch (Exception $e) {
    echo "exception occurs";
}
mysqli_close($conn);
