 <?php
 include'header.php';
  
      $from_date = $_POST['day1'];
            $to_date = $_POST['day2'];
           
    $status="out";

    ?>

<!DOCTYPE html>
<?php include '../header/header.php'; ?>
<body>
<section id="container">
<!--header start-->
<?php include '../link/link.php'; ?>


<!--main content start-->


   
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>All Report</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i>  <?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item active">All</li>
                        <li class="breadcrumb-item active">Reports</li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                           <h5 style="background-color: blue;color: white;border-radius: 2px;padding: 5px;"><center><b>All Selling Report as of <?php echo date("M d, Y",strtotime($from_date))." to ".date("M d, Y",strtotime($to_date));?></b></center></h5>
                            <h5><strong><b style="font-size: 300%;width: 130%;"><?php echo $name;?></b></strong> </h5>
                            <div class="row">                                
                                <div class="col-md-6 col-sm-6">
                                    <address>
                                        <strong>City: <?php echo $kgl;?></strong><br>
                                       sector:<?php echo $sector;?><br>
                                        Tin:<?php echo $Tin;?><br>
                                        email:<?php echo $email;?><br>
                                        Phone number:<?php echo $phone;?>
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                   <img src="<?php echo (!empty($prc['logo'])) ? '../images/'.$prc['logo'] : '../images/logd.png'; ?>" style="width: 22%;height: 17%;margin-left: 77%;margin-top: -19%;">                                    
                                </div>
                            </div>
                        </div>                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                  <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th bgcolor="orange" color="white">order_id</th>
                   <th bgcolor="orange" color="white">barcode</th>
                   <th bgcolor="orange" color="white">item</th>
                   <th bgcolor="orange" color="white">qty</th>
                   <th bgcolor="orange" color="white">cost</th>
                   <th bgcolor="orange" color="white">sale_status</th>
                   <th bgcolor="orange" color="white">done</th>
                   <th bgcolor="orange" color="white">date_done</th>
                   <th bgcolor="orange" color="white">total</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                           <th bgcolor="orange" color="white">order_id</th>
      <th bgcolor="orange" color="white">barcode</th>
                   <th bgcolor="orange" color="white">item</th>
                   <th bgcolor="orange" color="white">qty</th>
                   <th bgcolor="orange" color="white">cost</th>
                   <th bgcolor="orange" color="white">sale_status</th>
                   <th bgcolor="orange" color="white">done</th>
                   <th bgcolor="orange" color="white">date_done</th>
                   <th bgcolor="orange" color="white">total</th>
          </tr>
                                    </tfoot>
                                        <?php
  $result ="SELECT * FROM order_status WHERE  sale_status='ordered' AND stock_status='$status'  AND done_date  BETWEEN '" . $from_date . "' AND  '" . $to_date . "'";
$new = mysqli_query($conn,$result) or die(mysqli_error($conn));
        
while($row = mysqli_fetch_array($new)) { 
  extract($row);
                       ?>
                                        <tbody>
                                            <tr>
                                                 <td> <?php echo $order_id;?> </td>
                 <td> <?php echo $barcode; ?> </td>
                 <td> <?php echo $item; ?> </td>
                 <td> <?php echo  number_format($qty); ?> </td>
                 <td> <?php echo  number_format($cost); ?> </td>
                  <td> <?php echo  $sale_status; ?> </td>
                 <td> <?php echo $done; ?> </td>
                 <td><?php echo  $date_done; ?>  </td>
                 <td><?php echo  number_format($total); ?>  </td>
                                            </tr>
                                            <?php } ?>
                      <?php
$re= mysqli_query($conn,"SELECT sum(total) FROM order_status WHERE  sale_status='ordered' AND stock_status='$status' AND done_date  BETWEEN '" . $from_date . "' AND  '" . $to_date . "'");
$rep = mysqli_fetch_array($re);
 $berqef = $rep['sum(total)']; 
 $vat1= $berqef *18;
$vat=$vat1/100;
 echo "<tr>";
    echo "<td colspan='8' align='right'>Total Price:";
    echo "</td>";
    
    echo "<td> ". number_format($berqef);
    echo "</td>";
    echo "</tr>";
                      ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row">
                                
                                <div class="col-md-6 text-right">
                                    <ul class="list-unstyled">
                                        <li><strong>Total:</strong> <?php echo number_format($berqef); ?></li>
                                        
                                        <li><strong>VAT:</strong> <?php echo number_format($vat); ?></li>
                                    </ul>                                    
                                    <h3 class="mb-0 text-success">Rwf <?php echo number_format($berqef); ?></h3>
                                    <a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <?php include'../fjs/other.php'; ?> 
<?php include'../fjs/index.php'; ?>
</body>
</html>
