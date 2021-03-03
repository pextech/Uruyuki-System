<!-- Start of Query part or section -->
  <?php

      $ber ="select sum(qty) from order_status where stock_status='in' and sale_status='pending' AND order_id='$invoice'";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqeqt=mysqli_fetch_array($berq);
                 $berqef = $berqeqt['sum(qty)'];
         
         $ber ="select count(id) from order_status where stock_status='in' and sale_status='pending' AND order_id='$invoice'";
                 $countq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $countpr=mysqli_fetch_array($countq);
                 $countprf = $countpr['count(id)'];
       ?>

      <?php

      $ber ="select sum(total) from order_status where stock_status='in' and sale_status='pending' AND order_id='$invoice'";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqe=mysqli_fetch_array($berq);

                  $setname= mysqli_query($conn,"SELECT taxes FROM setting");
         $namme=mysqli_fetch_array($setname);
         $prep=$namme['taxes'];
                 $berqef = $berqe['sum(total)'];
                 $taxe=($berqef * 100/118)*18/100;
                
                 
                 //$taxe=$cals/100;

       ?>

        <?php


      $ber ="select sum(total) from order_status where stock_status='in' and sale_status='pending' AND order_id='$invoice'";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqe=mysqli_fetch_array($berq);
                 $berqef = $berqe['sum(total)'];

       ?>
<!-- End of Query part or section -->
<center>  ---------------------------------------------------</center><br>


<table  style="width: 330px;">
  <th>
    <tr>
      <td></td>
      <td></td>
    </tr>
  </th>
  <tbody >
    <tr>
      <td>Quantity of <?=number_format($countpr['count(id)']); ?> Items:</td>
      <td><?=number_format($berqeqt['sum(qty)']); ?></td>
    </tr>
    <tr>
      <td>Taxes to pay:</td>
      <td><?=number_format($taxe); ?></td>
    </tr>
    <tr>
      <td>Total:</td>
      <td><?=number_format($berqe['sum(total)']); ?></td>
    </tr>
  </tbody>
</table>
<br> 
<form name="Payment" action="../dist/includes/mpages/payment.php" method="POST">
<div class="row">  
<div class="pull-right">
  Amount Due:
  </div>
  <div class="pull-left">
  <input type="text" name="amountpay" id="inputprice" size="5" value="<?=number_format($berqe['sum(total)']); ?>" readonly style="margin-left: 173px;"><br>
  </div>
  </div>
  <br>
<div class="pull-right"><select name="payt" class="form-control select2" style="width:100%" required>
    <option></option>  
<?php
$query3=mysqli_query($conn,'SELECT * FROM pmethod')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?= $row3['method'];?>"><?= $row3['method'];?></option>
<?php 

}
?>
</select></div><br>

  