<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");
$customer_id = $_POST['customer_id'];
$roomno = $_POST['roomno'];

$sq1 = "UPDATE customer SET roomno=$roomno WHERE customer_id=$customer_id";
$q1 = mysqli_query($conn, $sq1);
$a = "SELECT * FROM customer WHERE customer_id=$customer_id";
$b = mysqli_query($conn, $a);
try {
  if ($q1) {
    echo "updated succesfully<br>";
    include 'Search.php';
  } else
    echo "error while updating data";
} catch (Exception $e) {
  echo "exception occurs";
}
