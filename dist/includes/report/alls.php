

 <?php
 include'header.php';
    if (isset($_POST['display'])){
      $from_date = $_POST['day1'];
            $to_date = $_POST['day2'];
          
    $status="out";

    ?>
  
<table>
  <tr>
    
      <td>
        <b style="font-size: 300%;width: 130%;"><?php echo $name;?></b> 
      </td>
    
  </tr>
    <tr>
      <td>
    <h6>City: <?php echo $kgl;?></h6></td>
    </tr>
    <tr>
      <td>
    <h6>sector:<?php echo $sector;?></h6></td>
    </tr>
    <tr>
      <td>
    <h6>Tin:<?php echo $Tin;?></h6></td>
    </tr>
    <tr>
      <td>
    <h6>sector:<?php echo $email;?></h6></td>
    </tr>
    <tr>
      <td>
    <h6>Phone number:<?php echo $phone;?></h6></td>
    </tr>
     </table>       
          <img src="<?php echo (!empty($prc['logo'])) ? '../../../images/'.$prc['logo'] : '../../../images/logd.png'; ?>" style="width: 22%;height: 17%;margin-left: 77%;margin-top: -19%;">

        <h5 style="background-color: blue;color: white;border-radius: 2px;padding: 5px;"><center><b>  Selling Report as of <?php echo date("M d, Y",strtotime($from_date))." to ".date("M d, Y",strtotime($to_date));?></b></center></h5>
        <table id="example1" class="table table-bordered table-striped" border="1" width="100%">
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
       
      
                    
                    <tbody>
<?php
   $sale="ordered";
  if ($status == 'out') {
   $result ="SELECT * FROM order_status WHERE done_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'  AND sale_status='$sale'";
$new = mysqli_query($conn,$result) or die(mysqli_error($conn));
        
while($row = mysqli_fetch_array($new)) {

extract($row);
             ?>   
             <input type="hidden" value="<?php echo $id;?>">
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

               
              <?php
    }
     include("../../../config/index.php");
      $stmt_edit = $DB_con->prepare("select sum(total) as totalx from order_status  WHERE done_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "' AND sale_status='$sale'");
         $id=$row['id'];
    $stmt_edit->execute(array(':id'=>$id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
    
    echo "<tr>";
    echo "<td colspan='8' align='right'>Total Price:";
    echo "</td>";
    
    echo "<td> ". number_format($totalx);
    echo "</td>";
?>
  <?php 
}
}
?>


 
      
              </tbody>
                    <tfoot>
          
                  
       
        </tfoot>
       </table>

         