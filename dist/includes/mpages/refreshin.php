<?php
session_start();
include '../dbcon.php';




$id=$_POST['id'];
$qty=$_POST['qty'];
$cost=$_POST['cost'];
$date=$_POST['date'];
$sdc=$_POST['sdc'];
$item=$_POST['item'];



for ($i=0; $i <count($id) ; $i++) { 
	$id_loop=$id[$i];
	$item_loop=$item[$i];
	$qty_loop=$qty[$i];
	$date_loop=$date[$i];
	$sdc_loop=$sdc[$i];
    $Quantity_loop=$cost[$i];
    $total_loop=$qty_loop * $Quantity_loop;



$sqlf = "UPDATE items SET expired_date='$date_loop',sdc_n='$sdc_loop' WHERE item_name='$item_loop'";

$sql = "UPDATE order_status SET qty='$qty_loop',total='$total_loop',exp='$date_loop',sdc='$sdc_loop' WHERE id='$id_loop'";
//var_dump($sql);
if ($conn->query($sql) === TRUE) {
    //echo "<script type='text/javascript'>alert(' $company  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../receiving/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>