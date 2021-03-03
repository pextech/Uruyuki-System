 <?php

 include'header.php';
   
$id=$_SESSION['user_id'];
$_SESSION['user_id']=$id;
    $sql = "select * from employee natural join branch where id='$id'";
    $query = $conn->query($sql);
    $user = $query->fetch_assoc();
  $userdon=$user['fullname'];
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

        <h5 style="background-color: blue;color: white;border-radius: 2px;padding: 5px;"><center><b> <?php echo $user['fullname']; ?> Your  Selling Report Today</b></center></h5>

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
  
   $result ="SELECT * FROM order_status WHERE done_date=CURDATE()  AND sale_status='ordered' AND done='$userdon'";
$new = mysqli_query($conn,$result) or die(mysqli_error($conn));
        
while($row = mysqli_fetch_array($new)) {

extract($row);
             ?> 
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
      $stmt_edit = $DB_con->prepare("select sum(total) as totalx FROM order_status WHERE done_date=CURDATE()  AND sale_status='ordered' AND done='$userdon'");
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
  



 
      
              </tbody>
                    <tfoot>
          
                  
       
        </tfoot>
       </table>

  <?php
       
include("../../../mpdf60/mpdf.php");
$mpdf=new mPDF('P','A4'); 
$mpdf = new mPDF(); $stylesheet = file_get_contents('../../../mpdf60/pdf.css'); $mpdf->WriteHTML($stylesheet,1);
$mpdf->SetDisplayMode('fullpage');
//$mpdf->AddPage("L");

// LOAD a stylesheet
$stylesheet = file_get_contents('../../../mpdf60/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);  // The parameter 1 tells that this is css/style only and no body/html/text
$report_content=ob_get_contents();
ob_clean();

$mpdf->WriteHTML($report_content,2);
$mpdf->Output('Product Selling Report','I');
exit; 
?>
        