<?php
session_start();
include('../dbcon.php');


$user=$_SESSION['own'];



/*----------------------*/

 $id=$_POST['id'];
 $Barcode=$_POST['Barcode'];
$Name=$_POST['Name'];
$Quantity=$_POST['Quantity'];
$unt1=$_POST['unt'];
$taxe1=$_POST['taxe'];
$stock1=$_POST['stock'];
$Date=$_POST['Date'];
$price=$_POST['price'];
$cost=$_POST['cost'];
$total=$cost * $Quantity;

/*----------------------*/

echo $sql = "UPDATE items SET barcode='$Barcode',item_name='$Name',quantity='$Quantity',price='$price',cost='$cost',total='$total',unit='$unt1',expired_date='$Date',taxes='$taxe1',stock='$stock1' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('$Name Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../items/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    


    
?>