<?php
session_start();
include '../dbcon.php';

$id=$_POST['id'];
$Supplier=$_POST['Supplier'];
$Tin=$_POST['Tin'];
$phone=$_POST['phone'];
$Email=$_POST['Email'];
$Location=$_POST['Location'];
$done=$_SESSION['own'];



$sql = "UPDATE supplier SET name='$Supplier',tin='$Tin',phone='$phone',email='$Email',location='$Location',done='$done' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert(' $Supplier  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../suplier/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>