<?php

session_start();
include('../dist/includes/dbcon.php');



$q = addslashes(trim($_GET['q']));

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM items WHERE barcode LIKE '%$q%' OR item_name LIKE '%$q%'  ORDER BY id";
//$result = mysqli_query($con,"SELECT * FROM product ORDER BY ASC");
$result = mysqli_query($conn,$sql);
$ans=mysqli_affected_rows($conn);
//echo$ans;
if($ans==0)
{
	echo "<center style='background-color:white;'>";
echo"<font color='red'>No Item found In Stock!</font>";
echo "</center>";
}
else{
	
while($row = mysqli_fetch_array($result))
{
	echo '<a href="data.php?i=' . $row['id'] . '">';
	echo "<center style='background-color:white;color:black;'>";
	echo "<td>".$row['barcode']."</td>";
	echo "   ||   ";
	echo "<td>".$row['item_name']."</td>";
	echo "   ||   ";
	echo "<td>".$row['cost']."</td>";
	echo "   ||   ";
	echo "<td>";
	echo "<td>".$row['quantity']."</td>";
	echo "</td>";
	echo "   ||   ";
	echo "<td>".$row['total']."</td>";
	echo "</center>";
	echo "</a>";
}
}
?>