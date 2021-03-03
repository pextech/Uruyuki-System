<?php 

session_start();
include('../dist/includes/dbcon.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
#cssload-pgloading {}

#cssload-pgloading:after {
		content: "";
		z-index: -1;
		position: absolute;
		top: 0; right: 0; bottom: 0; left: 0;
}
#cssload-pgloading .cssload-loadingwrap {position:absolute;top:45%;bottom:45%;left:25%;right:25%;}
#cssload-pgloading .cssload-bokeh {
		font-size: 163px;
		width: 2em;
		height: 2em;
		position: relative;
		margin: 0 auto;
		list-style: none;
		padding:0;
		border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
}

#cssload-pgloading .cssload-bokeh li {
		position: absolute;
		width: .3em;
		height: .3em;
		border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
}

#cssload-pgloading .cssload-bokeh li:nth-child(1) {
		left: 50%;
		top: 0;
		margin: 0 0 0 -.2em;
		background: rgb(0,193,118);
		transform-origin: 50% 250%;
		-o-transform-origin: 50% 250%;
		-ms-transform-origin: 50% 250%;
		-webkit-transform-origin: 50% 250%;
		-moz-transform-origin: 50% 250%;
		animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(2) {
		top: 50%; 
		right: 0;
		margin: -.2em 0 0 0;
		background: rgb(255,0,60);
		transform-origin: -150% 50%;
		-o-transform-origin: -150% 50%;
		-ms-transform-origin: -150% 50%;
		-webkit-transform-origin: -150% 50%;
		-moz-transform-origin: -150% 50%;
		animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(3) {
		left: 50%; 
		bottom: 0;
		margin: 0 0 0 -.2em;
		background: rgb(250,190,40);
		transform-origin: 50% -150%;
		-o-transform-origin: 50% -150%;
		-ms-transform-origin: 50% -150%;
		-webkit-transform-origin: 50% -150%;
		-moz-transform-origin: 50% -150%;
		animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(4) {
		top: 50%; 
		left: 0;
		margin: -.2em 0 0 0;
		background: rgb(136,193,0);
		transform-origin: 250% 50%;
		-o-transform-origin: 250% 50%;
		-ms-transform-origin: 250% 50%;
		-webkit-transform-origin: 250% 50%;
		-moz-transform-origin: 250% 50%;
		animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
}







@keyframes cssload-rota {
		from { }
		to { transform: rotate(360deg); }
}

@-o-keyframes cssload-rota {
		from { }
		to { -o-transform: rotate(360deg); }
}

@-ms-keyframes cssload-rota {
		from { }
		to { -ms-transform: rotate(360deg); }
}

@-webkit-keyframes cssload-rota {
		from { }
		to { -webkit-transform: rotate(360deg); }
}

@-moz-keyframes cssload-rota {
		from { }
		to { -moz-transform: rotate(360deg); }
}

@keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-o-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-ms-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-webkit-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-moz-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}
</style>

	</head>
<body>
<div id="cssload-pgloading">
		<div class="cssload-loadingwrap">
			<ul class="cssload-bokeh">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
<script src="../dist/js/date_time.js"></script>
</body>

</html>
<?php 


if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];
//$branch=$_POST['branch'];

$user = mysqli_real_escape_string($conn,$user_unsafe);
$pass1 = mysqli_real_escape_string($conn,$pass_unsafe);

$pass1=($pass1);
$salt="a1Bz20ydqelm8m1wql";
$pass=$pass1;




$query=mysqli_query($conn,"select * from employee  where username='$user' and password='$pass' ")or die(mysqli_error($conn));
	$row=mysqli_fetch_array($query);
           $id=$row['id'];
           $name=$row['fullname'];
           
           $role=$row['post'];
           $user=$row['username'];
           $role=$row['post'];
           $query=mysqli_query($conn,"select * from branch where branch_id='$role'")or die(mysqli_error($conn));
  $branch_retr=mysqli_fetch_array($query);
           $branch_name=$branch_retr['branch_name'];
           
           $first=$row['fullname'];
           $counter=mysqli_num_rows($query);

           $id=$row['id'];
           
           $_SESSION['user_id']=$id;
	       $_SESSION['name']=$user;
           $_SESSION['role']=$role;
           $_SESSION['own']=$name;
           $_SESSION['branch_name']=$branch_name;
           $_SESSION['id']=$first;
  
$check=mysqli_query($conn,"SELECT * FROM invoice ORDER BY id DESC LIMIT 1");

$run=mysqli_fetch_array($check);

extract($run);

$idau=$id;

$comname="invoice";

$testcon=$comname .  $idau;

$statusn="pending";

$_SESSION['invoice']=$testcon; 


if($role=="3")
	 {	
	 $admin="has logged in the system at ";  
		mysqli_query($conn,"INSERT INTO history_log(user_id,action) VALUES('$branch_name','$admin')")or die(mysqli_error($conn));
    
	 echo "<script type='text/javascript'>document.location='../dashboard/'</script>";
	 }
	   elseif ($role=="1") {
	 	$cashier="has logged in the system at ";  
		mysqli_query($conn,"INSERT INTO history_log(user_id,action) VALUES('$branch_name','$cashier')")or die(mysqli_error($conn));
    
	 	echo "<script type='text/javascript'>document.location='../dashboard/'</script>";
	 }
	 elseif ($role=="2") {
	 	$product="has logged in the system at ";  
		mysqli_query($conn,"INSERT INTO history_log(user_id,action) VALUES('$branch_name','$product')")or die(mysqli_error($conn));
   
	 	echo "<script type='text/javascript'>document.location='../dashboard/'</script>";
	 }
 else
 {
    echo "<script type='text/javascript'>alert('Invalid Username or Password!');
	document.location='../index.php'</script>";
 }
}
?>

	
