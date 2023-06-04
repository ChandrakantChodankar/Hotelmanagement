<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");
$roomno = $_POST["roomno"];
$roomtype = $_POST["type"];
$price = $_POST["price"];

$sq1 = "INSERT INTO room VALUES($roomno,'$roomtype',$price)";
try {
    if (mysqli_query($conn, $sq1)) {
        echo "Data inserted sucessfully";
        echo "<br>Room number is: " . $roomno;
        echo "<br>Room Type is : " . $roomtype;
        echo "<br>Price is: " . $price;
    } else
        echo "Error while addding data";
} catch (Exception $e) {
    echo "exception occur";
}
