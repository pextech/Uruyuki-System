<!-- Start of Query part or section -->
<?php

      $ber ="select sum(qty) from purchase where stock_status='out' and sale_status='pending' AND order_id='$invoice' ";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqeqt=mysqli_fetch_array($berq);
                 $berqef = $berqeqt['sum(qty)'];
         
         $ber ="select count(id) from purchase where stock_status='out' and sale_status='pending' AND order_id='$invoice' ";
                 $countq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $countpr=mysqli_fetch_array($countq);
                 $countprf = $countpr['count(id)'];
       ?>

        <?php

      $ber ="select sum(total) from purchase where stock_status='out' and sale_status='pending' AND order_id='$invoice' ";
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


      $ber ="select sum(total) from purchase  where stock_status='out' and sale_status='pending' AND order_id='$invoice'";
                 $berq = mysqli_query($conn,$ber) or die(mysqli_error($conn));
                 $berqe=mysqli_fetch_array($berq);
                 $berqef = $berqe['sum(total)'];

       ?>
<!-- End of Query part or section -->
<center>  ---------------------------------------------------</center><br>


<table  style="width: 348px;">
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