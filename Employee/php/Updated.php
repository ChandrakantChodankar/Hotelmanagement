<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$id = $_POST['id'];
$salary = $_POST['salary'];

$sq1 = "UPDATE employee SET salary=$salary WHERE employee_id=$id";
$q1 = mysqli_query($conn, $sq1);
$a = "SELECT * FROM employee WHERE employee_id=$id";
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
