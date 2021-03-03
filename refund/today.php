<!doctype html>
<html class="no-js " lang="en">
   <?php include'../header/header.php'; ?>
<body class="theme-blush">

<!-- Page Loader -->
<?php
if (isset($_GET['delete_id'])) {
$id = $_GET['delete_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM customer WHERE id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../customer/'</script>";
}
?>
<?php include '../link/link.php'; ?>

<?php include'../link/theme.php'; ?>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Today Invoices</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> <?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Invoices</a></li>
                        <li class="breadcrumb-item active">List Of Invoices</li>
                    </ul>
                    <br>
                    <div class="col-md-2">
   </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

     


<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Stock</strong> Items </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                           <div class="col-md-12">
                           <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
            <th ><font color="black">Invoice</font></th>
            <th ><font color="black">Total_items</font></th>
            <th ><font color="black">Total_qty</font></th>
            <th  data-breakpoints="xs"><font color="black">Total</font></th> 
            <th ><font color="black">Customer </font></th>
            <th ><font color="black">View</font></th>
          </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
             <th ><font color="black">Invoice</font></th>
            <th ><font color="black">Total_items</font></th>
            <th ><font color="black">Total_qty</font></th>
            <th  data-breakpoints="xs"><font color="black">Total</font></th> 
            <th ><font color="black">Customer</font></th>
            <th ><font color="black">View</font></th>
          </tr>
                                    </tfoot>
                                    <tbody>
                                       <?php
include("../config/index.php");
  $date=date("Y/m/d");
  $stmt = $DB_con->prepare("SELECT * FROM order_status WHERE stock_status='out'  AND done_date='$date' GROUP BY id DESC");
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);
      ?>
      <?php

      $re= mysqli_query($conn,"SELECT count(*) as ptotal FROM order_status WHERE order_id='$order_id' AND done_date='$date' ");
       $rep = mysqli_fetch_array($re);
       $berqefa= $rep['ptotal'];

       $qtye= mysqli_query($conn,"SELECT sum(qty) FROM order_status WHERE order_id='$order_id'  AND done_date='$date' ");
       $qtyq = mysqli_fetch_array($qtye);
       $qtyqf= $qtyq['sum(qty)'];

       $ref= mysqli_query($conn,"SELECT sum(total) FROM order_status WHERE order_id='$order_id' AND done_date='$date' ");
       $repq = mysqli_fetch_array($ref);
       $berqefr = $repq['sum(total)'];

         ?>
                                        <tr>
           <td><?=$order_id; ?></td>
          <td><?= number_format($berqefa); ?></td>
          <td><?=number_format($qtyqf); ?></td>
          <td><?= number_format($berqefr); ?></td>
          <td><?=$customer; ?></td>
          <td><a href="../refound?inv_id=<?=$order_id; ?>" target="_blank"><i class="zmdi zmdi-eye"></i><i class="zmdi zmdi-eye"></i></a></td>
                                        </tr>
                                      <?php
    }
    
  
  }
  else
  {
    ?>
    
      
        <div class="col-xs-12">
          <div class="alert alert-warning">
              <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Unpaid Invoices Found ...
            </div>
        </div>
        <?php
  }
  
?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



</div>
</section>

<?php include'../fjs/index.php'; ?>
<?php include'../fjs/other.php'; ?>
</body>
</html>