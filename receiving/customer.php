<style type="text/css">
	center{

	}
</style>
<?php

session_start();
include('../dist/includes/dbcon.php');



$q = addslashes(trim($_GET['q']));

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM supplier WHERE name LIKE '%$q%' OR phone LIKE '%$q%' ORDER BY id";
//$result = mysqli_query($con,"SELECT * FROM product ORDER BY ASC");
$result = mysqli_query($conn,$sql);
$ans=mysqli_affected_rows($conn);
//echo$ans;
if($ans==0)
{
	echo "<center style='background-color:white;'>";
echo"<font color='red'>No Customer found In System!</font>";
echo "</center>";
}
else{
	
while($row = mysqli_fetch_array($result))
{
	echo '<a href="save_customer.php?i=' . $row['id'] . '">';
	echo "<center style='background-color:white;color:black;hover:background-color:yellow;'>";
	echo "<td>".$row['name']."</td>";
	echo "   ||   ";
	echo "<td>".$row['phone']."</td>";
	echo "   ||   ";
	echo "<td>".$row['tin']."</td>";
	echo "</center>";
	echo "</a>";
}
}
?>