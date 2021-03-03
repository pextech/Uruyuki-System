<?php   

session_start();
include('../dist/includes/dbcon.php');
include("../config/index.php");

if (isset($_GET['i'])) {
 $barcode = $_GET['i'];


  $stmt = $DB_con->prepare("SELECT * FROM customer WHERE id='$barcode'");
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);

    
    
    $p_id=$id;
    $p_barcode= $fullname;
    $p_item_name= $phone;
    $p_cost= $nid;
    $stock_status="out";
    $sale_status="pending";
    $invoice=$_SESSION['invoice'];
    $done=$_SESSION['own'];



$sql = "UPDATE order_status SET customer='$p_barcode'WHERE stock_status='out' AND sale_status='pending' AND order_id='$invoice' ";

if ($conn->query($sql) === TRUE) {
  $_SESSION['customer']=$p_barcode;
  
    echo "<script type='text/javascript'>alert(' $p_barcode  Successfully Inserted On The $invoice ');</script>";
    echo "<script>window.location='../selling/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}
}
else{

echo "<script type='text/javascript'>alert('$barcode Doesn't found in stock ');</script>";
		echo "<script>window.location='../selling/'</script>";


}
}




 ?>