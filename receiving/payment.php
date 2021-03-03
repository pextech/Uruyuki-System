<?php
session_start();
include '../dbcon.php';

 

$amountopay=$_POST['amountpay'];
$amountdued=$_POST['amountdue'];
$payte=$_SESSION['payt'];
$invoice=$_SESSION['invoice'];

$done=$_SESSION['own'];



$sql = "INSERT INTO payment (invoice, paid ,pay_type ,done)
VALUES ('$invoice', '$amountdued', '$payte', '$done')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('$amountdued Successfully Saved ');</script>";
		echo "<script>window.location='../../../selling/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>