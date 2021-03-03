<?php 
include('../dbcon.php');
	$username = $_POST['cate'];

	mysqli_query($conn,"INSERT INTO pmethod
		(method) 
		VALUES
		('$username')")
		or die(mysqli_error($conn));  
			echo "<script type='text/javascript'>alert('$username Successfully Saved!');</script>";
			echo "<script>window.location='../../../setting/'</script>";  
	


?>