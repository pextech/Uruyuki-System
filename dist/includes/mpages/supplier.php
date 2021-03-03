<?php
session_start();
include '../dbcon.php';


$Supplier=$_POST['Supplier'];
$Tin=$_POST['Tin'];
$phone=$_POST['phone'];
$Email=$_POST['Email'];
$Location=$_POST['Location'];
$done=$_SESSION['own'];



$sql = "INSERT INTO supplier (name, tin, phone ,email ,location ,done)
VALUES ('$Supplier', '$Tin', '$phone', '$Email', '$Location', '$done')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('$Supplier Successfully Saved ');</script>";
		echo "<script>window.location='../../../suplier/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>