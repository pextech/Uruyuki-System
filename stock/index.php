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
                    <h2>Stock Management</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i><?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item active">Stock</li>
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
                <div class="col-sm-12">
                    <div class="row">
                    <div class="col-md-6">

                            
                    <a href="../Items">
                    <div class="card">
                        <div class="body xl-purple">
                           
                            <p class="mb-0 ">Items</p>                        
                            
                        </div>
                    </div>
                    </a>

                    <a href="../purchase">
                    <div class="card">
                        <div class="body xl-green">
                           
                            <p class="mb-0 ">Purchase Order</p>
                           
                        </div>
                    </div>
                </a>
                    <a href="../receiving">
                    <div class="card">
                        <div class="body xl-blue">
                           
                            <p class="mb-0">Receiving</p>

                        </div>
                    </div>
                    </a>
                </div>
                </a>

                <div class="col-md-6">
                    <a href="../Inventory">
                    <div class="card">
                        <div class="body xl-pink">
                        
                            <p class="mb-0">Inventory Stock</p>
                            
                        </div>                        
                    </div>
                    </a>
                    <a href="">
                    <div class="card">
                        <div class="body xl-blue">
                        
                            <p class="mb-0">Distribution</p>
                            
                        </div>                        
                    </div>
                    </a>
                    <a href="../Situation" target="_blank">
                    <div class="card">
                        <div class="body xl-purple">
                        
                            <p class="mb-0">Stock Situation</p>
                            
                        </div>                        
                    </div>
                    </a>

                </div>
            </div>
        </div>
            </div>
        </div>


</div>
</section>

<?php include'../fjs/index.php'; ?>