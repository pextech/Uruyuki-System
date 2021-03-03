<!doctype html>
<html class="no-js " lang="en">
   <?php include'../header/header.php'; ?>
<body class="theme-blush">

<!-- Page Loader -->


<?php include '../link/link.php'; ?>

<?php include'../link/theme.php'; ?>

<!-- Main Content -->

<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i><?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon video">
                        <div class="body">
                                <?php  
            $re= mysqli_query($conn,"SELECT count(*) as ptotal FROM items WHERE expired_date>= CURDATE() ORDER BY id");
$rep = mysqli_fetch_array($re);
 $berqefa= $rep['ptotal']; 
 ?>
        
                            <h6>Products</h6>
                            <h2><?php echo number_format($berqefa); ?> <small class="info">Items</small></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon layout">
                            <?php  
            $re= mysqli_query($conn,"SELECT count(*) as ptotal FROM employee ORDER BY id");
$rep = mysqli_fetch_array($re);
 $berqefa= $rep['ptotal']; 
 ?>
                        <div class="body">
                            <h6>Users</h6>
                            <h2><?php echo number_format($berqefa); ?> <small class="info">User's</small></h2>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon music">
                            <?php  
            $re= mysqli_query($conn,"SELECT count(*) as ptotal FROM order_status WHERE stock_status='out' AND sale_status='ordered' AND done_date=CURDATE() ORDER BY id DESC");
$rep = mysqli_fetch_array($re);
 $berqefa= $rep['ptotal']; 
 ?>
                        <div class="body">
                            <h6>Sales</h6>
                            <h2><?php echo number_format($berqefa); ?> <small class="info">Ordered Item Today</small></h2>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon gallery">
                            <?php  
            $re= mysqli_query($conn,"SELECT count(*) as ptotal FROM order_status WHERE stock_status='out' AND sale_status='pending' AND done_date=CURDATE() ORDER BY id DESC");
$rep = mysqli_fetch_array($re);
 $berqefa= $rep['ptotal']; 
 
 ?>
                        <div class="body">
                            <h6>Pending</h6>
                            <h2><?php echo number_format($berqefa); ?> <small class="info">Pending Item Today</small></h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong><i class="zmdi zmdi-chart"></i> Total </strong> Money</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body mb-2">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <?php
                    $re= mysqli_query($conn,"SELECT sum(total) FROM items WHERE expired_date>= CURDATE()");
$rep = mysqli_fetch_array($re);
 $berqef = $rep['sum(total)']; 
                     ?>
                                                <h5><?php echo number_format($berqef); ?></h5>
                                                <span><i class="ti-notepad"></i> Products</span>
                                            </div>
                                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#868e96">5,2,3,7,6,4,8,1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>                                
                                                <h5>1</h5>
                                                <span><i class="ti-user"></i> Users</span>
                                            </div>
                                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#2bcbba">8,2,6,5,1,4,4,3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <?php
                    $re= mysqli_query($conn,"SELECT sum(total) FROM order_status WHERE stock_status='out' AND sale_status='ordered' AND done_date=CURDATE() ORDER BY id DESC");
$rep = mysqli_fetch_array($re);
 $berqef = $rep['sum(total)']; 
                     ?>
                                                <h5><?php echo number_format($berqef); ?></h5>
                                                <span><i class="ti-shopping-cart-full"></i> Sales</span>
                                            </div>
                                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#82c885">4,4,3,9,2,1,5,7</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="state_w1 mb-1 mt-1">
                                        <div class="d-flex justify-content-between">
                                            <div>           
                                                 <?php
                    $re= mysqli_query($conn,"SELECT sum(total) FROM order_status WHERE stock_status='out' AND sale_status='pending' AND done_date=CURDATE() ORDER BY id DESC");
$rep = mysqli_fetch_array($re);
 $berqef = $rep['sum(total)']; 
                     ?>            
                                                <h5><?php echo number_format($berqef); ?></h5>
                                                <span><i class="zmdi zmdi-alert-circle-o"></i> Pending</span>
                                            </div>
                                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#45aaf2">7,5,3,8,4,6,2,9</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include'../fjs/index.php'; ?>