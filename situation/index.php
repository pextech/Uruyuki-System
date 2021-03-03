<?php include('../dist/includes/dbcon.php');
session_start();
$invoice=$_SESSION['invoice'];
 ?>

<?php

include('header.php')
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
    <h6>Phone number:<?php echo $phone;?></h6></td>
    </tr>
     </table>  
     --------------------------------------------------     
         <img src="<?php echo (!empty($prc['logo'])) ? '../images/'.$prc['logo'] : '../images/logd.png'; ?>" style="width: 22%;height: 17%;margin-left: 77%;margin-top: -19%;"><br>
         <div style="margin-left: 67%;">
        
<br>
 </div>
        <table id="example1" class="table table-bordered table-striped" border="1" width="100%">
              <tr>
                <th colspan="7" bgcolor="orange" color="white"><b>Purchase</b></th>
              <th colspan="7" bgcolor="orange" color="white"><b>Sales</b></th>
                        <tr>
                  <th bgcolor="#cbc9c9" color="black">Barcode</th>
                   <th bgcolor="#cbc9c9" color="black">Item</th>
                   <th bgcolor="#cbc9c9" color="black">Inventory value</th>
                   <th bgcolor="#cbc9c9" color="black">Vat</th>
                   <th bgcolor="#cbc9c9" color="black">Value Waste</th>
                   <th bgcolor="#cbc9c9" color="black">Value Exp</th>
                   <th bgcolor="#cbc9c9" color="black">Stock Value</th>
                   
                   <th bgcolor="#cbc9c9" color="black">Inventory value</th>
                   <th bgcolor="#cbc9c9" color="black">Vat</th>
                   <th bgcolor="#cbc9c9" color="black">Value Waste</th>
                   <th bgcolor="#cbc9c9" color="black">Value Exp</th>
                   <th bgcolor="#cbc9c9" color="black">Stock Value </th>
                   <th bgcolor="#cbc9c9" color="black">Vat Tobe</th>
                   <th bgcolor="#cbc9c9" color="black">Net Profit</th>
               
                </tr>
                   </tr>
       
      
                    
                    <tbody>
 <?php
     //include("db_conection.php");
         $results = mysqli_query($conn,"SELECT * FROM order_status WHERE stock_status='inve'  AND order_id='$invoice' AND done_date=CURDATE ORDER BY id DESC");
     while($row = mysqli_fetch_array($results)) { 
        $pid=$row['item'];
      ?>
        
                <tr>
                  
                   <?php
          $Item= mysqli_query($conn,"SELECT * FROM items WHERE item_name='$pid'");
          $disp=mysqli_fetch_array($Item);
          $nme=$disp['item_name'];
          $bar=$disp['barcode'];
          $unit=$disp['unit'];
          $quantitya=$disp['quantity'];
          $priz=$disp['price'];
          $costd=$disp['cost'];
          
           ?>
         <td>
    <?php echo $bar; ?>
    </td>
    <td>
    <?php echo $nme; ?>
    </td>
      <td>
    <?php echo number_format($priz*$quantitya); ?>
    </td>
    <td>
    <?php echo number_format((($priz*$quantitya)*100/118)*18/100); ?>
    </td>
     <td>
    <?php echo $row["qty"]; ?>
    </td>
    <td>
    <?php echo $row["exp"]; ?>
    </td>
     <td>
    <?php echo  number_format($quantitya-($row["exp"]+$row["qty"])); ?>
    </td>
     <td>
    <?php echo number_format($costd*$quantitya); ?>
    </td>
    <td>
    <?php echo number_format((($costd*$quantitya)*100/118)*18/100); ?>
    </td>
    <td>
    <?php echo $row["qty"]; ?>
    </td>
    <td>
    <?php echo $row["exp"]; ?>
    </td>           
     <td>
    <?php echo  number_format($quantitya-($row["exp"]+$row["qty"])); ?>
    </td>
    <td>
    <?php echo  number_format(((($costd*$quantitya)*100/118)*18/100)-((($priz*$quantitya)*100/118)*18/100)); ?>
    </td>          
    <td>
    <?php

    $tobe=((($costd*$quantitya)*100/118)*18/100)-((($priz*$quantitya)*100/118)*18/100);
    $inve=($costd*$quantitya)-($priz*$quantitya);
    //var_dump($inve);
     echo  number_format($inve-$tobe); 
     ?>
    </td>
               
              <?php
    }
     


  ?> 


 
      
              </tbody>
                    <tfoot>
          
                  
       
        </tfoot>
       </table>

        
                        


                    <?php
       
include("../mpdf60/mpdf.php");
//$mpdf=new mPDF('A4', 'landscape'); 
$mpdf = new mPDF(); $stylesheet = file_get_contents('../mpdf60/pdf.css'); $mpdf->WriteHTML($stylesheet,1);
$mpdf->SetDisplayMode('fullpage');
//$mpdf->AddPage("L");

// LOAD a stylesheet
$stylesheet = file_get_contents('../mpdf60/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);  // The parameter 1 tells that this is css/style only and no body/html/text
$report_content=ob_get_contents();
ob_clean();

$mpdf->WriteHTML($report_content,2);
$mpdf->Output('purchase','I');
exit; 
?>
     