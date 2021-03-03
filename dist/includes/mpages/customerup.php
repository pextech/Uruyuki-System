<?php
session_start();
include '../dbcon.php';

$id=$_POST['id'];
$Supplier=$_POST['Supplier'];

$phone=$_POST['phone'];
$Email=$_POST['Email'];
$Location=$_POST['Location'];
$done=$_SESSION['own'];



$sql = "UPDATE customer SET fullname='$Supplier',phone='$phone',email='$Email',nid='$Location',done='$done' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert(' $Supplier  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../customer/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>