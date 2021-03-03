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
         <?php
                               $check = "SELECT customer FROM purchase where order_id='$invoice'";
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
                              $tio = "SELECT tin FROM supplier where name='$nm'";
                            $tino = mysqli_query($conn, $tio);
                           $tin = mysqli_fetch_assoc($tino);
                           echo $tin["tin"];;
                                ?><br>
                               Client Name :<font size="2px"> <?php echo $row["customer"];?></font><br>
                            <?php
                           }

                             ?>
                            
---------------------------------------------
 </div>
        <table id="example1" class="table table-bordered table-striped" border="1" width="100%">
                        <tr>
                         
                  <th bgcolor="#cbc9c9" color="black">Barcode</th>
                   <th bgcolor="#cbc9c9" color="black">Item</th>
                   <th bgcolor="#cbc9c9" color="black">Unit</th>
                   <th bgcolor="#cbc9c9" color="black">Price</th>
                   <th bgcolor="#cbc9c9" color="black">Qty</th>
                   <th bgcolor="#cbc9c9" color="black">Total</th>
                </tr>
       
      
                    
                    <tbody>
 <?php
     //include("db_conection.php");
         $results = mysqli_query($conn,"SELECT * FROM purchase WHERE stock_status='out'  AND order_id='$invoice' ORDER BY id DESC");
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
          $priz=$disp['price'];
          
           ?>
                 
                 <td>
    <?php echo $bar; ?>
    </td>
    <td>
    <?php echo $nme; ?>
    </td>
    <td>
    <?php echo $unit; ?>
      
    </td>
    <td>
    <?php echo $priz; ?>
    </td>
    <td>
    <?php echo $row['qty']; ?>
    </td>
    <td >
    <?php echo number_format($row['qty']*$priz); ?>
    </td>
         
                </tr>
 <?php
    }
     include("config.php");
      $stmt_edit = $DB_con->prepare("select sum(total) as totalx from purchase  WHERE stock_status='out'  AND order_id='$invoice' ");
         $id=$row['id'];
    $stmt_edit->execute(array(':id'=>$id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
    
    echo "<tr>";
    echo "<td colspan='5' align='right'>Total:";
    echo "</td>";
    
    echo "<td> ". number_format($totalx);
    echo "</td>";
?>
               
              

 


 
      
              </tbody>
                    <tfoot>
          
                  
       
        </tfoot>
       </table>

        
                        



                    <?php
       
$label="Purchase";
header("Content-type:application/octet-stream");
header("Content-Disposition:attachment;filename=$label.xls");
header("Pragma:no-cache");
header("Expires:0");
?>
     