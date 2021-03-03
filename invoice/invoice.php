<?php include('../dist/includes/dbcon.php');
session_start();
$invoice=$_SESSION['invoice'];
 ?>

<?php

include('header.php')
?>

<?php
    //include("db_conection.php");
    $tota ="select sum(total) from order_status WHERE stock_status='out' AND sale_status='pending' AND order_id='$invoice'";
    $tot = mysqli_query($conn,$tota);
    $ok = mysqli_fetch_array($tot);
    //var_dump($tota);
    ?>


                                
                            -------------------------------------<br>
                             <div class="pull-center" > <address>
                                        <strong><?php echo $name;?></strong><br>
                                        City: <?php echo $kgl;?><br>
                                       sector:<?php echo $sector;?><br>
                                        Tin:<?php echo $Tin;?><br>
                                        email:<?php echo $email;?><br>
                                        Phone number:<?php echo $phone;?>
                                    </address>
                            </div>
                            
                            </h5>
                        </div>
                        -------------------------------------<br>
                        <div class="modal-body">
                            <!-- style="padding-left:0.7cm;"


                            TIN :0<br>-->
                            <h5 class="modal-title" id="myModalLabel">
                              <?php
                               $check = "SELECT customer FROM order_status where order_id='$invoice'";
                            $result = mysqli_query($conn, $check);
                           $row = mysqli_fetch_assoc($result);
                           if( $row["customer"] == null){ 
                            $nm=$row["customer"];
                                ?>
                                Client Tin : <br>
                               Client Name : <br>
                               <?php
                        }
                           else{
                            ?>
                               Client Tin : <?php 
                               $nm=$row["customer"];
                              $tio = "SELECT tin_number FROM customer where fullname='$nm'";
                            $tino = mysqli_query($conn, $tio);
                           $tin = mysqli_fetch_assoc($tino);
                           echo $tin["tin_number"];;
                                ?><br>
                               Client Name :<font size="2px"> <?php echo $row["customer"];?></font><br>
                            <?php
                           }

                             ?>
                              </h5>
                                -------------------------------------<br>
                                 <table>
                                     
     <tbody>
  <tr>
    <th>Item</th>
    <th>price</th>
    <th>Qty</th>
    <th>Total</th>
  </tr>
         <?php
     //include("db_conection.php");
         $results = mysqli_query($conn,"SELECT * FROM order_status WHERE stock_status='out' AND sale_status='pending' AND order_id='$invoice' ORDER BY id DESC");
     while($row = mysqli_fetch_array($results)) { ?>
         <tr>
    <td>
    <?php echo $row['item']; ?>
    </td>
    <br>
    <td>
    <?php echo number_format($row['cost']); ?>
    </td>
    *
    <td>
    <?php echo number_format($row['qty']); ?>
    </td>
    <td class="pull-right">
    <?php echo number_format($row['total']); ?>&nbsp;RWF
    </td>
       </tr>
   <?php } ?>
  </tbody>

</table> 
   
    <br>------------------------------ <br><span >GRAND TOTAL    : <?php echo $ok['sum(total)'] ?> </b>RWF</span><br> 
    <span >  Balance    : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 RWF</span><br> 
    <span > (100%)    : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ok['sum(total)'] ?> </b>RWF</span><br> 
                                                         --------------------------<br>
<p> <span style="padding-left:1cm;">THANK YOU</span><br>
<font >Powered by Byimenyere ltd</font></p><br>
        
                        


                    <?php
       
include("../mpdf60/mpdf.php");
//$mpdf=new mPDF('P','A4'); 
$mpdf = new mPDF(); $stylesheet = file_get_contents('../mpdf60/pdf.css'); $mpdf->WriteHTML($stylesheet,1);
$mpdf->SetDisplayMode('fullpage');
//$mpdf->AddPage("L");

// LOAD a stylesheet
$stylesheet = file_get_contents('../mpdf60/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);  // The parameter 1 tells that this is css/style only and no body/html/text
$report_content=ob_get_contents();
ob_clean();

$mpdf->WriteHTML($report_content,2);
$mpdf->Output('invoice','I');
exit; 
?>
     