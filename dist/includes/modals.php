<?php include('dbcon.php') ?>
<div class="modal fade" id="Supplier" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
            <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">New Supplier</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                         <form  action = "../dist/includes/mpages/supplier.php" method="post" enctype="multipart/form-data"> 
                           
                  
               
                  <label>Supplier Name</label>
                <input type="text" name = "Supplier" class="form-control" placeholder="Supplier">
                  <br/>
                  <label for="hgytf">Tin Number</label>
                <input type="number" name = "Tin" class="form-control" placeholder="Tin">
                  <br/>
                 <label for="subject">phone number</label>
                <input type="number" name = "phone" class="form-control" placeholder="phone">
                  <br/>
                  <label for="subject">Email</label>
                <input type="email" name = "Email" class="form-control" placeholder="Email">
                  <br/>
                  <label for="subject">Location</label>
                <input type="text" name = "Location" class="form-control" placeholder="Location">
                  <br/>
                      
             <a href="" onclick="document.forms[0].submit();return false;">
              <button  name = "update" class="btn btn-primary">Save Information</button></a>
            </form>
            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
        </div>

        <div class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
            <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">New customer</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                         <form  action = "../dist/includes/mpages/customer.php" method="post" enctype="multipart/form-data"> 
                           
                  
               
                  <label>fullname</label>
                <input type="text" name = "Supplier" class="form-control" placeholder="fullname">
                  <br/>
                 <label for="subject">phone number</label>
                <input type="number" name = "phone" class="form-control" placeholder="phone">
                  <br/>
                 <label for="subject">Tin number</label>
                <input type="number" name = "Tin" class="form-control" placeholder="Tin">
                  <br/>
                  <label for="subject">Email</label>
                <input type="email" name = "Email" class="form-control" placeholder="Email">
                  <br/>
                  <label for="subject">National Id</label>
                <input type="text" name = "Location" class="form-control" placeholder="National Id">
                  <br/>
                      
             <a href="" onclick="document.forms[1].submit();return false;">
              <button  name = "update" class="btn btn-primary">Save Information</button></a>
            </form>
            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
        </div>

              <div class="modal fade" id="employee" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
            <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">New employee</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                         <form  action = "../dist/includes/mpages/employee.php" method="post" enctype="multipart/form-data"> 
                           
                  
               
                  <label>fullname</label>
                <input type="text" name = "Supplier" class="form-control" placeholder="Supplier">
                  <br/>
                  <label>Username</label>
                <input type="text" name = "Username" class="form-control" placeholder="Username">
                  <br/>
                  <label>Password</label>
                <input type="password" name = "Password" class="form-control" placeholder="Password">
                  <br/>
                 <label for="subject">phone number</label>
                <input type="number" name = "phone" class="form-control" placeholder="phone">
                  <br/>
                  <label for="subject">Email</label>
                <input type="email" name = "Email" class="form-control" placeholder="Email">
                  <br/>
                  <label for="subject">National Id</label>
                <input type="text" name = "Location" class="form-control" placeholder="National Id">
                  <br/>
                  <label for="rtyre">Post</label>
             <select  name = "ePosts" class="form-control show-tick ms search-select" data-placeholder="Select" show-tick ms search-select" data-placeholder="Select">
                <?php 
                  include('../dist/includes/dbcon.php');                
                    $query1=mysqli_query($conn,"select * from branch ORDER BY branch_id ASC")or die(mysqli_error($conn));
                    while ($row1=mysqli_fetch_array($query1)){
                      $id=$row1['branch_id'];
              ?>
              <option value = "<?php echo $row1['branch_id'];?>"><?php echo $row1['branch_name'];?></option>  
              <?php } ?>
              </select>
                  <br/>
                       <a href="" onclick="document.forms[2].submit();return false;">
              <button  name = "update" class="btn btn-primary">Save Information</button></a>
            </form>
            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
        </div>


                      <div class="modal fade bd-example-modal-lg" id="itmes" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel">
            <div class="modal-dialog modal-lg" >
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">New items</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                            <form id="form_validation" method="post" action="../dist/includes/mpages/newitem.php">
  <table  style="width: 100%;">
    <th>
      <tr>
        <td>Barcode</td>
        <td> Name</td>
        <td>price</td>
        <td>cost</td>
        <td>unit</td>
        <th>Measure</th>
        <th>Categories</th>
        <th>Lot</th>
        <td>Taxe</td>
         <td>Stock</td>
      </tr>
    </th>
          <tr id="in">
          <td>
 <?php
                                 
$sel = "SELECT * FROM items";
$selp = mysqli_query($conn,$sel) or die(mysqli_error($conn));
$seld=mysqli_fetch_array($selp);
$idau=$seld['id'];
//var_dump($idau);
$comname="p";
 $testcon=$comname .  $idau;

                              ?>
    <input type="text" class="form-control"  name="Barcode[]" placeholder="<?php echo $testcon; ?>">
</td>
<td>

    <input type="text" class="form-control"  name="Name[]"  placeholder="Item Name" required>
  
</td>
<td>


    <input type="number" class="form-control"  name="price[]"  placeholder="price">
 
</td>
<td>


    <input type="number" class="form-control"  name="cost[]"  placeholder="cost" required>
 
</td>
<td>


      <select  style="width:100%" name="unt[]" class="form-control show-tick ms search-select" data-placeholder="Select" required>
      <option value=""></option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM measurement')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?php echo $row3['measure'];?>"><?php echo $row3['measure'];?></option>
<?php 

}
?>
</select>
  
  </td>
  <td>
    <input type="number" class="form-control"  name="measured[]"  placeholder="measure">
  </td>
  <td>
    <select  style="width:100%" name="categorieso[]" class="form-control show-tick ms search-select" data-placeholder="Select" required>
      <option value=""></option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM category')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?php echo $row3['category'];?>"><?php echo $row3['category'];?></option>
<?php 

}
?>
</select>
  </td>

  <td>


    
       <select class="form-control show-tick ms search-select" data-placeholder="Select" style="width:100%" name="taxe[]">
      <option value=""></option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM setting')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?php echo $row3['taxes'];?>"><?php echo $row3['taxes'];?></option>
<?php 

}
?>
</select>
  
  </td>
  <td>


    
         <select class="form-control show-tick ms search-select" data-placeholder="Select" style="width:100%" name="stock[]" required>
      <option value=""></option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM stock')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?php echo $row3['stock_name'];?>"><?php echo $row3['stock_name'];?></option>
<?php 

}
?>
</select>
  
  </td>
  <td>
  
       <span><a  id="inminus" href="">[-]</a> <a  id="inplus" href="">[+]</a></span>
      
    </td>

    </tr>

     </table>

   
                      </div>
                        <div class="modal-footer">
                           <a href="" onclick="document.forms[3].submit();return false;">
                           <button  name = "update" class="btn btn-primary">Save Information</button></a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
        </div>

        
                      <div class="modal fade bd-example-modal-lg" id="pending" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel">
            <div class="modal-dialog modal-lg" >
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">Pending Commands</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                        <div class="col-md-12">
                           <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
            <th ><font color="black">Invoice</font></th>
            <th ><font color="black">Total_items</font></th>
            <th ><font color="black">Total_qty</font></th>
            <th  data-breakpoints="xs"><font color="black">Total</font></th> 
            <th ><font color="black">Customer </font></th>
            <th ><font color="black">View</font></th>
          </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
             <th ><font color="black">Invoice</font></th>
            <th ><font color="black">Total_items</font></th>
            <th ><font color="black">Total_qty</font></th>
            <th  data-breakpoints="xs"><font color="black">Total</font></th> 
            <th ><font color="black">Customer</font></th>
            <th ><font color="black">View</font></th>
          </tr>
                                    </tfoot>
                                    <tbody>
                                       <?php
include("../config/index.php");
  $stmt = $DB_con->prepare("SELECT * FROM order_status WHERE stock_status='out' AND sale_status='unpaid' GROUP BY order_id DESC");
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);
      ?>
      <?php

      $re= mysqli_query($conn,"SELECT count(*) as ptotal FROM order_status WHERE order_id='$order_id'");
       $rep = mysqli_fetch_array($re);
       $berqefa= $rep['ptotal'];

       $qtye= mysqli_query($conn,"SELECT sum(qty) FROM order_status WHERE order_id='$order_id'");
       $qtyq = mysqli_fetch_array($qtye);
       $qtyqf= $qtyq['sum(qty)'];

       $ref= mysqli_query($conn,"SELECT sum(total) FROM order_status WHERE order_id='$order_id'");
       $repq = mysqli_fetch_array($ref);
       $berqefr = $repq['sum(total)'];

         ?>
                                        <tr>
           <td><?=$order_id; ?></td>
          <td><?= number_format($berqefa); ?></td>
          <td><?=number_format($qtyqf); ?></td>
          <td><?= number_format($berqefr); ?></td>
          <td><?=$customer; ?></td>
          <td><a href="../unpaid?inv_id=<?=$order_id; ?>"><i class="zmdi zmdi-eye"></i><i class="zmdi zmdi-eye"></i></a></td>
                                        </tr>
                                      <?php
    }
    
  
  }
  else
  {
    ?>
    
      
        <div class="col-xs-12">
          <div class="alert alert-warning">
              <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Unpaid Invoices Found ...
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
        </div>