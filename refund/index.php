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
                    <h2>Refund Management</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i><?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item active">Refund</li>
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

                            
                    <a href="today.php" target="_blank">
                    <div class="card">
                        <div class="body xl-purple">
                           
                            <p class="mb-0 ">To Day Invoice</p>                        
                            
                        </div>
                    </div>
                    </a>

                   </div>

                <div class="col-md-6">
                     <div class="panel-group full-body" id="accordion_5" role="tablist" aria-multiselectable="true">
                        <div class="panel-heading" role="tab" id="headingOne_5">
                   <a role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseOne_5" aria-expanded="true" aria-controls="collapseOne_5">
                    <div class="card">
                        <div class="body xl-pink">
                        
                            <p class="mb-0">Select Invoice By Dates</p>
                            
                        </div>                        
                    </div>
                </a>
            </div>
                    <div id="collapseOne_5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_5">
                                        <div class="panel-body">
                                             <!-- /.form group -->
          <form name="Emplyees" method="POST" action="date.php" target="_blank">
            
          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
       
              <!-- /.form group --><br>
             <a href="#" onclick="document.forms['Emplyees'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
        
         
            <!-- /.box-body -->
                                        </div>
                                    </div>
                    </a>

                </div>

            </div>
            </div>
        </div>
            </div>
        </div>


</div>
</section>

<?php include'../fjs/index.php'; ?>