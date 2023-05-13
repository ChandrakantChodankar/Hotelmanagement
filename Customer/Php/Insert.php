<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");

$id = $_POST["id"];
$customer_name = $_POST["Customer_name"];
$phone_no = $_POST["Phone_no"];
$address = $_POST["Address"];
$roomno = $_POST["Room_no"];

$sq1 = "INSERT INTO customer VALUES($id,'$customer_name',$phone_no,'$address',$roomno)";
try {
    if (mysqli_query($conn, $sq1)) {
        echo "Data inserted sucessfully";
        echo "<br>Customer_id: " . $id;
        echo "<br>Customer_name: " . $customer_name;
        echo "<br>phone_no: " . $phone_no;
        echo "<br>Address: " . $address;
        echo "<br>Room_no: " . $roomno;
    } else
        echo "Error while addding data";
} catch (Exception $e) {
    echo "exception occur";
}
?>