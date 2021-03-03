<?php
session_start();
include '../dbcon.php';


$Supplier=$_POST['Supplier'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$phone=$_POST['phone'];
$Email=$_POST['Email'];
$Location=$_POST['Location'];
$Post=$_POST['ePosts'];
$done=$_SESSION['own'];



 
          


$sql = "INSERT INTO employee (fullname, username, password, phone ,email, post, nid ,done)
VALUES ('$Supplier', '$Username', '$Password', '$phone', '$Email', '$Post', '$Location', '$done')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('$Supplier Successfully Saved ');</script>";
		echo "<script>window.location='../../../employee/'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

      



?>