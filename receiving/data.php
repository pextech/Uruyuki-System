<?php   

session_start();
include('../dist/includes/dbcon.php');
include("../config/index.php");

if (isset($_GET['i'])) {
 $barcode = $_GET['i'];


  $stmt = $DB_con->prepare("SELECT * FROM items WHERE id='$barcode'");
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);

    
    
    $p_id=$id;
    $p_barcode= $barcode;
    $p_item_name= $item_name;
    $p_quantity= "1";
    $p_cost= $price;
    $p_total=$p_quantity * $p_cost;
    $stock_status="in";
    $sale_status="pending";
    $invoice=$_SESSION['invoice'];
    $done=$_SESSION['own'];
    
  $check_item="select * from order_status WHERE item='$p_item_name' AND order_id='$invoice' AND done_date=CURDATE()";
    $run_query=mysqli_query($conn,$check_item);

    if(mysqli_num_rows($run_query)>0)
    {
  $results = mysqli_query($conn,"SELECT * FROM order_status WHERE  item='$p_item_name' AND order_id='$invoice' AND done_date=CURDATE()");
     $row = mysqli_fetch_array($results);
     $QTUY=$row['qty'];
     $qttal=$QTUY+$p_quantity;
     $pu_total=$qttal * $p_cost;
     $sql = "UPDATE order_status SET qty='$qttal',total='$pu_total' WHERE  item='$p_item_name' AND order_id='$invoice' AND done_date=CURDATE()";

     if ($conn->query($sql) === TRUE) {
    
 echo "<script>window.location='../receiving/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

exit();
    }
    else{


    $sql = "INSERT INTO order_status (order_id,barcode, item, qty ,cost ,total ,stock_status,sale_status,done,done_date)
VALUES ('$invoice','$p_barcode', '$p_item_name', '$p_quantity', '$p_cost', '$p_total','$stock_status','$sale_status','$done',CURDATE())";

if ($conn->query($sql) === TRUE) {
   // echo "<script type='text/javascript'>alert('$Supplier Successfully Saved ');</script>";
		echo "<script>window.location='../receiving/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

}

}
}
else{

echo "<script type='text/javascript'>alert('$barcode Doesn't found in stock ');</script>";
		echo "<script>window.location='../receiving/'</script>";


}
}




 ?>