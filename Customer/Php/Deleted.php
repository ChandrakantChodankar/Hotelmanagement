<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");
$customer_id = $_POST['delete'];

$sq1 = "DELETE FROM customer WHERE customer_id=$customer_id";
$q1 = mysqli_query($conn, $sq1);
try {
    if ($q1) {
        echo "Deleted succesfully<br>";
    } else
        echo "Error while deleting";
} catch (Exception $e) {
    echo "exception occur";
}
