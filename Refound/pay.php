<?php



session_start();
include('../dist/includes/dbcon.php');
$done=$_SESSION['own'];
$invoice=$_SESSION['invoice'];
$status="ordered";
$statuso="pending";

 $invoiceunp=$_SESSION['invoiceid'];

$jax = mysqli_query($conn,"SELECT * FROM `order_status` WHERE order_id='$invoiceunp' ");



while($jqry = mysqli_fetch_array($jax)) {


	$itenam=$jqry['item'];
	$quantity=$jqry['qty'];

	
	$sel = "SELECT * FROM items  WHERE item_name='$itenam'";
	$selp = mysqli_query($conn,$sel) or die(mysqli_error($conn));
	$seld=mysqli_fetch_array($selp);

	$client=$seld['quantity'];
	$real=$client + $quantity;
    //var_dump($itenam);
	$sql = "UPDATE items SET quantity='$real' WHERE item_name='$itenam'";

if ($conn->query($sql) === TRUE) {
    echo "yes";
		//echo "<script>window.location='../../../employee/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}


//here I'm Going to update the items which is pending on the first invoice created by Byimenyere

$upd=mysqli_query($conn,"UPDATE order_status SET sale_status='$status' WHERE order_id='$invoiceunp' ");

if (!$upd) {
	
	echo "Error Updating Beacause".mysqli_error($conn);
}


$upinv=mysqli_query($conn,"UPDATE invoice SET status='$status' WHERE order_id='$invoiceunp'");

$invop=mysqli_query($conn,"UPDATE payment SET status='$status' WHERE invoice='$invoiceunp'");

if (!$upinv) {
	
	echo "Error Updating Beacause".mysqli_error($conn);
}





//here is making new invoice number  below here by Byimenyere


$check=mysqli_query($conn,"SELECT * FROM invoice ORDER BY id DESC LIMIT 1");

$run=mysqli_fetch_array($check);

extract($run);

$idau=$id;

$comname="invoice";

$testcon=$comname .  $idau;

$statusn="pending";

$_SESSION['invoice']=$testcon;

	
//here is inserting the new invoice that made above the code of creating new invoice Byimenyere


$ins=mysqli_query($conn,"INSERT INTO invoice (order_id,datedone,doneby,status)VALUES ('$testcon',CURDATE(),'$done','$statusn')");

if (!$ins) {
	
	echo "new invoice not inserted in invoices table beacause".mysqli_error($conn);
}else{
	echo "<script>window.location='../refound/refound.php'</script>";
}





















 ?>