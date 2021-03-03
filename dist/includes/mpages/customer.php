<?php
session_start();
include '../dbcon.php';

 

$Supplier=$_POST['Supplier'];
$phone=$_POST['phone'];
$Email=$_POST['Email'];
$Location=$_POST['Location'];
$tini=$_POST['Tin'];
$done=$_SESSION['own'];



$sql = "INSERT INTO customer (fullname, phone ,email, tin_number ,nid ,done)
VALUES ('$Supplier', '$phone', '$Email', '$Location', '$tini', '$done')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('$Supplier Successfully Saved ');</script>";
		echo "<script>window.location='../../../customer/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>