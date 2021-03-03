<?php
session_start();
include '../dbcon.php';




$id=$_POST['id'];
$qty=$_POST['qty'];
$cost=$_POST['cost'];


for ($i=0; $i <count($id) ; $i++) { 
	$id_loop=$id[$i];
	$qty_loop=$qty[$i];
    $Quantity_loop=$cost[$i];
    $total_loop=$qty_loop * $Quantity_loop;




$sql = "UPDATE order_status SET qty='$qty_loop',total='$total_loop' WHERE id='$id_loop'";
//var_dump($sql);
if ($conn->query($sql) === TRUE) {
    //echo "<script type='text/javascript'>alert(' $company  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../selling/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>