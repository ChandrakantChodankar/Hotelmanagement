<?php
$conn = mysqli_connect("localhost", "root", "", "hotelmanagementsystem");
$roomno = $_POST['delete'];

$sq1 = "DELETE FROM room WHERE roomno=$roomno";
$q1 = mysqli_query($conn, $sq1);
try {
    if ($q1) {
        echo "Deleted succesfully";
    } else
        echo "Error while deleting";
} catch (Exception $e) {
    echo "exception occur";
}
