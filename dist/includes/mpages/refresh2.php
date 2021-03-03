<?php
session_start();
include '../dbcon.php';




echo $id=$_POST['id'];
echo $qty=$_POST['qty'];
echo $cost=$_POST['cost'];

$total=$qty*$cost;
var_dump($total);





$sql = "UPDATE purchase SET qty='$qty',total='$total' WHERE id='$id'";
//var_dump($sql);
if ($conn->query($sql) === TRUE) {
    //echo "<script type='text/javascript'>alert(' $company  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../purchase/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>