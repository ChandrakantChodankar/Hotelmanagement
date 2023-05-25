<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$id = $_POST["Employee_id"];
$employee_name = $_POST["Employee_name"];
$salary = $_POST["salary"];
$roomno = $_POST["roomno"];

$sq1 = "INSERT INTO employee VALUES($id,'$employee_name',$salary,$roomno)";
try {
    if (mysqli_query($conn, $sq1)) {
        echo "Data inserted sucessfully";
        echo "<br>Customer_id: " . $id;
        echo "<br>Customer_name: " . $employee_name;
        echo "<br>phone_no: " . $salary;
        echo "<br>Address: " . $roomno;
    } else
        echo "Error while addding data";
} catch (Exception $e) {
    echo "exception occur";
}
