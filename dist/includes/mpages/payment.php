<?php
session_start();
include '../dbcon.php';

 

$amountopay=$_POST['amountpay'];
$amountdued=$_POST['amountdue'];
$payte=$_POST['payt'];
$invoice=$_SESSION['invoice'];
$stat="pending";
$done=$_SESSION['own'];

$check_item="select * from payment WHERE invoice='$invoice' AND status='stat'";
    $run_query=mysqli_query($conn,$check_item);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Item is already exist, Please try another one!')</script>";
 echo"<script>window.open('admin.php','_self')</script>";
exit();
    }

$sql = "INSERT INTO payment (invoice, paid ,pay_type , status ,done)
VALUES ('$invoice', '$amountdued', '$payte', '$stat', '$done')";

if ($conn->query($sql) === TRUE) {
		echo "<script>window.location='../../../selling/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>