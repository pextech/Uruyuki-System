<?php
session_start();
include '../dbcon.php';




$id=$_POST['id'];

$qty=$_POST['qty'];
$exp=$_POST['exp'];

$cost=$_POST['cost'];




for ($i=0; $i <count($id) ; $i++) { 
	$id_loop=$id[$i];
	$qty_loop=$qty[$i];
	$cost_loop=$cost[$i];
    $Quantity_loop=$exp[$i];
    $total_loop=$qty_loop + $Quantity_loop;
    $final_loop=$cost_loop-$total_loop;
    //var_dump($cost_loop);



$sql = "UPDATE order_status SET qty='$qty_loop',exp='$Quantity_loop',total='$final_loop' WHERE id='$id_loop'";
//var_dump($sql);
if ($conn->query($sql) === TRUE) {
    //echo "<script type='text/javascript'>alert(' $company  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../inventory/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>