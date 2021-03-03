<?php 
 
         include 'dbcon.php';
         $setname= mysqli_query($conn,"SELECT company FROM setting");
         $namme=mysqli_fetch_array($setname);


	 echo $namme['company']; 
?>