<?php
session_start();
include '../dbcon.php';

$id=$_POST['id'];
$Supplier=$_POST['Supplier'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$phone=$_POST['phone'];
$Email=$_POST['Email'];
$Location=$_POST['Location'];
$Post=$_POST['ePosts'];
$done=$_SESSION['own'];



$sql = "UPDATE employee SET fullname='$Supplier',username='$Username',password='$Password',phone='$phone',email='$Email',nid='$Location',post='$Post',done='$done' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert(' $Supplier  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../employee/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>