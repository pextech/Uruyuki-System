 <?php 

include '../dist/includes/dbcon.php'; 

 $setname= mysqli_query($conn,"SELECT * FROM setting");
         $namme=mysqli_fetch_array($setname);

				 

$name=$namme['company'];
$phone=$namme['phone'];
$gm="@gmail.com";
$email= $name.$gm;
$sector=$namme['location'];
$Tin=$namme['tin'];
$kgl="Kigali City";

