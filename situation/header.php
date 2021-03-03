 <?php 

include '../dist/includes/dbcon.php'; 

$invoice=$_SESSION['invoice'];

 $setname= mysqli_query($conn,"SELECT * FROM setting");
         $namme=mysqli_fetch_array($setname);

				 

$name=$namme['company'];
$phone=$namme['phone'];
$gm="@gmail.com";
$email= $name.$gm;
$sector=$namme['location'];
$Tin=$namme['tin'];
$kgl="Kigali City";





$check=mysqli_query($conn,"SELECT * FROM invoice ORDER BY id DESC LIMIT 1");

$run=mysqli_fetch_array($check);

extract($run);

$idau=$id;

$comname="invoice";

$testcon=$comname .  $idau;

$statusn="pending";

$_SESSION['invoice']=$testcon;



$paymente=mysqli_query($conn,"SELECT * FROM payment WHERE invoice='$invoice'");

$pya=mysqli_fetch_array($paymente);