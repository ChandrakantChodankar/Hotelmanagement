<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");
$roomno = $_POST['roomno'];
$price = $_POST['price'];

$sq1 = "UPDATE room SET price=$price WHERE roomno=$roomno";
$q1 = mysqli_query($conn, $sq1);
$a = "SELECT * FROM room";
$b = mysqli_query($conn, $a);
try {
  if ($q1) {
    include 'Searchd.php';
  } else
    echo "error while updating data";
} catch (Exception $e) {
  echo "exception occurs";
}
