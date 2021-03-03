<?php
session_start();
include('../dbcon.php');


$user=$_SESSION['own'];



/*----------------------*/

 $Barcode=$_POST['Barcode'];
$Name=$_POST['Name'];
$unt=$_POST['unt'];
$taxe=$_POST['taxe'];
$stock=$_POST['stock'];
$price=$_POST['price'];
$cost=$_POST['cost'];
$supplier=$_POST['supplier'];
$measurede=$_POST['measured'];
$categories=$_POST['categorieso'];
$Lote=$_POST['Lot'];
/*----------------------*/




/*----------------------*/
    

     for ($i=0; $i <count($Name) ; $i++) { 
	$Barcode_loop=$Barcode[$i];
	$Name_loop=$Name[$i];
    $unt_loop=$unt[$i];
    $stock_loop=$stock[$i];
    $supplier_loop=$supplier[$i];
    $price_loop=$price[$i];
    $cost_loop=$cost[$i]; 
    $taxe_loop=$taxe[$i];
    $measurede_loop=$measurede[$i];
    $categories_loop=$categories[$i];
    $Lote_loop=$Lote[$i];


     $check_item="select * from items WHERE barcode='$Barcode_loop' AND item_name='$Name_loop'";
    $run_query=mysqli_query($conn,$check_item);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('$Name_loop is already exist, Please try another one!')</script>";
 echo "<script>window.location='../../../items/'</script>";
exit();
    }

/*----------------------*/

$sql = "INSERT INTO items (barcode, item_name ,price ,cost,unit,taxes,stock,supplier,done,category,measure,lot)
VALUES ('$Barcode_loop','$Name_loop','$price_loop','$cost_loop','$unt_loop','$taxe_loop','$stock_loop','$supplier_loop', '$user','$categories_loop','$measurede_loop','$Lote_loop')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('$Name_loop Successfully Saved ');</script>";
		echo "<script>window.location='../../../items/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    

}

    
?>