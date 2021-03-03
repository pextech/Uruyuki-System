<?php 
session_start();
include '../dist/includes/dbcon.php'; 
?>
<?php 

if(empty($_SESSION['user_id'])):
header('Location:../index.php');
endif;
//var_dump($server);
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Home | <?php include('../dist/includes/head.php');?> ::</title>
<!-- Favicon-->
<link rel="icon" href="../assets/images/logd.png" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="../assets/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Select2 -->
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="../assets/plugins/multi-select/css/multi-select.css">
<link rel="stylesheet" href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" />
<link rel="stylesheet" href="../assets/plugins/select2/select2.css" />
<link rel="stylesheet" href="../assets/css/style.min.css"> 
<link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />   
</head>
<?php include'../dist/includes/modals.php'; ?>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>

       <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <?php  
            $re= mysqli_query($conn,"SELECT count(*) as ptotal FROM items WHERE expired_date<= CURDATE() ORDER BY id");
$rep = mysqli_fetch_array($re);
 $berqef = $rep['ptotal']; 
 ?>
            <ul class="dropdown-menu slideUp2">
                <li class="header">You have <?php echo number_format($berqef); ?> Expired Product</li>
                <li class="body">
                    <ul class="menu list-unstyled">

     <?php 
$query="SELECT *  FROM items WHERE expired_date<= CURDATE() ORDER BY id";
                    
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 ?>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                <div class="menu-info">
                                    <h4><?php echo $row['item_name']; ?></h4>
                                    <p>Barcode => <?php  echo $row['barcode']; ?>  <br> Quantity=> <?php echo $row['quantity']; ?><br>Expired On => <?php echo $row['expired_date']; ?> </p>
                                </div>
                            </a>
                        </li>
                         <?php } ?>
                    </ul>
                </li>
                <li class="footer"> <a href="../expired">View All Notifications</a> </li>
            </ul>
        </li>
        
       
        <li><a href="javascript:void(0);" class="app_calendar datetimepicker"  title="Calendar"><i class="zmdi zmdi-calendar">  
        </i></a></li>
            <?php
include('../dist/includes/modals.php');
$branch=$_SESSION['role'];
$query=mysqli_query($conn,"select * from branch where branch_id='$branch'")or die(mysqli_error($conn));
  $row=mysqli_fetch_array($query);
           $branch_name=$row['branch_name'];
?>
    <?php
                   if ( $branch_name == 'admin'|| $branch_name == 'superadmin') {
                    echo'
        <li><a href="../setting"  title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>';
            }?>
        <li><a href="../logout.php" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 