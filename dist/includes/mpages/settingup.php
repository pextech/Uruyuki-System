<?php
session_start();
include '../dbcon.php';

$id=$_POST['id'];
$company=$_POST['company'];
$taxes=$_POST['taxes'];
$Location=$_POST['Location'];
$Phone=$_POST['Phone'];
$Tin=$_POST['Tin'];




$done=$_SESSION['own'];

 


$sql = "UPDATE setting SET company='$company',taxes='$taxes',location='$Location',phone='$Phone',tin='$Tin',done='$done' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert(' $company  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../setting/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>