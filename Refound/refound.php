
<!doctype html>
<html class="no-js " lang="en">
   <?php include'../header/header.php'; ?>
<body class="theme-blush">

<!-- Page Loader -->
<?php
if (isset($_GET['delete_id'])) {
$id = $_GET['delete_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM order_status WHERE id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../selling/'</script>";
}
if (isset($_GET['delete_allid'])) {
$id = $_GET['delete_allid'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM order_status WHERE order_id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../selling/'</script>";
}
?>
 <script>
function showResult(str)
{
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("txtHint").innerHTML="";
  
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","search.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showcustomer(str)
{
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("txtHint").innerHTML="";
  
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showcustomer").innerHTML=xmlhttp.responseText;
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    document.getElementById("showcustomer").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","customer.php?q="+str,true);
xmlhttp.send();
}
</script>
<?php include '../link/link.php'; ?>

<?php include'../link/theme.php'; ?>
<?php

  $invoiceunp=$_SESSION['invoiceid'];
 ?>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Selling</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> <?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Selling</a></li>
                        <li class="breadcrumb-item active">Stock out</li>
                    </ul>
                     <br>
                    <div class="col-md-2">
     <button class="btn btn-sm btn-success" ><a href="#" data-toggle="modal" data-target="#pending"> Pending Invoices</a></button>
   </div>
                  
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

     
     <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>selling</strong> basket</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
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
                            <div class="row clearfix">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" onkeyup="showResult(this.value)" class="form-control" placeholder="Find or Scan Item" autofocus>
                                        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
        <div id="livesearch"></div>
        <table class="table" ui-jq="footable" cellspacing="pixels">
        <thead>
          <tr>
            <th   data-breakpoints="xs"><font color="black">Delete</font></th>
            <th ><font color="black">Barcode</font></th>
            <th ><font color="black">Name</font></th>
            <th ><font color="black">Cost</font></th>
            <th  data-breakpoints="xs"><font color="black">Quantity</font></th> 
            <th ><font color="black">Total</font></th>
            <th ><font color="black">Update</font></th>
          </tr>
        </thead>
         <tbody bgcolor="white" style="overflow-y: auto;max-height: 325px;min-width: 665px;">
         <?php 

         include("../config/index.php");



//$invoice=$_SESSION['invoice'];
  $stmt = $DB_con->prepare("SELECT * FROM order_status WHERE stock_status='out'  AND order_id='$invoiceunp' ORDER BY id DESC");
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);

          ?>
          <form name="refreshd" action="../dist/includes/mpages/refreshf.php" method="POST">
          <tr>
            <input type="hidden" name="id[]" value="<?=$id; ?>">
          <td><a class="btn btn-danger"  href="?delete_id=<?= $id ?>" title="click for delete" onclick="return confirm('Are you sure to remove <?php echo $item; ?>?')"><div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div></a></td>
           <td>
            <input type="hidden" name="barcode[]" value="<?=$barcode; ?>">
            <?=$barcode; ?>
              
            </td>
           <td>
             <input type="hidden" name="item[]" value="<?=$item; ?>">
            <?=$item; ?>
              
            </td>
           <td>
              <input type="hidden" name="cost[]" value="<?=$cost; ?>">
            <?=number_format($cost); ?>
              
            </td>
           <td><input type="text" name="qty[]" size="5" value="<?=$qty; ?>"></td>
           <td>
             <input type="hidden" name="total[]" value="<?=$total; ?>">
            <?=number_format($total); ?>
              
            </td>
           <td><a href="#" onclick="document.forms['refreshd'].submit(); return false;"><button class="btn btn-primary" ><div ><i class="ti-exchange-vertical"></i></div></button></a></td>
           </tr>
           </form>
          <?php
    }
    
  
  }
  else
  {
    ?>
    
      
        <div class="col-xs-12">
          <div class="alert alert-warning">
              <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No item Found  in Cart...
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
                                   <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Items Details" readonly>
                                        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                          <center>  ---------------------------------------------------</center><br>

                            <?php

                            $check = "SELECT customer FROM order_status where order_id='$invoiceunp'";
                            $result = mysqli_query($conn, $check);
                           $row = mysqli_fetch_assoc($result);
                           if( $row["customer"] == null){
   //run this code        ?>
                                Customer 
<button class="btn btn-sm btn-success" ><a href="#" data-toggle="modal" data-target="#customer"> New Customers</a></button>
  </header>
  <div  role="alert" >
          <input type="text" onkeyup="showcustomer(this.value)" class="form-control" style="color: black;" placeholder="search by Name Or Phone " aria-describedby="basic-addon2">
          <div id="showcustomer"></div><br>
            </div>
                          <?php
                           }
                           else{
                            ?>
                              <input type="text" class="form-control" value="<?php echo $row["customer"]; ?>" readonly>
                            <?php
                           }

                             ?>



                                <center>  ---------------------------------------------------</center><br>
      <?php

      $ber ="select sum(qty) from order_status where stock_status='out'  AND order_id='$invoiceunp'";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqe=mysqli_fetch_array($berq);
                 $berqef = $berqe['sum(qty)'];
         
         $ber ="select count(id) from order_status where stock_status='out'  AND order_id='$invoiceunp'";
                 $countq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $countpr=mysqli_fetch_array($countq);
                 $countprf = $countpr['count(id)'];
       ?>
      Quantity of <?=number_format($countpr['count(id)']); ?> Items:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=number_format($berqe['sum(qty)']); ?><br>
      <?php

      $ber ="select sum(total) from order_status where stock_status='out'  AND order_id='$invoiceunp'";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqe=mysqli_fetch_array($berq);

                  $setname= mysqli_query($conn,"SELECT taxes FROM setting");
         $namme=mysqli_fetch_array($setname);
         $prep=$namme['taxes'];
                 $berqef = $berqe['sum(total)'];
                 $cals=$berqef * $prep;
                
                 
                 $taxe=$cals/100;

       ?>
      Taxes to pay:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=number_format($taxe); ?><br>
      <?php


      $ber ="select sum(total) from order_status where stock_status='out'  AND order_id='$invoiceunp'";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqe=mysqli_fetch_array($berq);
                 $berqef = $berqe['sum(total)'];

       ?>
      Total:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=number_format($berqe['sum(total)']); ?><br>
               <center>---------------------------------------------</center><br>
               Amount Due:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=number_format($berqe['sum(total)']); ?><br>
               <center> ------------------------------------------------</center>
               <div style="width: 100%;height: 90px;">
                
Payment Type:    <div class="pull-right"><select class="form-control select2" style="width:100%" name="method[]" required>
      <option value="">--none--</option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM pmethod')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?= $row3['method'];?>"><?= $row3['method'];?></option>
<?php 

}
?>
</select></div><br>

 Amount Tendered:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="amountdue" size="10" value="<?=number_format($berqe['sum(total)']); ?>" disabled><br><br><br>
        <br><br><br>
<br><br>    
             

     </div> 
<br><br><br>
      <button class="btn btn-sm btn-danger" ><a  href="?delete_allid=<?= $invoiceunp ?>" title="click for delete" onclick="return confirm('Are you sure to Cancel <?php echo $invoiceunp; ?>?')"> Cancel</a></button> 
     <button class="btn btn-sm btn-primary" ><a href="../pay/gusubika.php?pending_id=<?= $invoiceunp ?>" title="click for delete" onclick="return confirm('Are you sure to make this Pending <?php echo $invoiceunp; ?>  ?')"><font color="blue"> Pending</font></a></button>       
     <button class="btn btn-sm btn-success" ><a href="pay.php"> Pay</a></button>
  
               

                        </div>
                      </div>
                    </div>
                                    </div>

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
