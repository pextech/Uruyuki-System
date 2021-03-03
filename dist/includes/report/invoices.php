

 <?php
 include'header.php';
    if (isset($_POST['display'])){
      $from_date = $_POST['day1'];
            $to_date = $_POST['day2'];
            $order_status=$_POST['cate'];
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

        <h5 style="background-color: blue;color: white;border-radius: 2px;padding: 5px;"><center><b><?php echo $order_status; ?>  Selling Report as of <?php echo date("M d, Y",strtotime($from_date))." to ".date("M d, Y",strtotime($to_date));?></b></center></h5>
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
   $result ="SELECT * FROM order_status WHERE done_date BETWEEN '" . $from_date . "' AND  '" . $to_date . "' AND item='$order_status' AND sale_status='$sale'";
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
                 <td> <?php echo $row['done']; ?> </td>
                 <td><?php echo  $row['date_done']; ?>  </td>
                 <td><?php echo  number_format($total); ?>  </td>
                </tr>

               
              <?php
    }
      
}
}
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
         