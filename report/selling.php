<div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Reports</strong> Selling </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            
                            <div class="panel-group full-body" id="accordion_5" role="tablist" aria-multiselectable="true">
                                <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingOne_5">
                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseOne_5" aria-expanded="true" aria-controls="collapseOne_5"> <i class="ti-id-badge"></i>&nbsp;&nbsp;&nbsp;Emplyees </a> </h4>
                                    </div>
                                    <div id="collapseOne_5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_5">
                                        <div class="panel-body">
                                             <!-- /.form group -->
          <form name="Emplyees" method="POST" action="../report_selling/employee.php" target="_blank">
            
          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
             <i class="fa fa-users"></i>
              </div>
            <select class="form-control show-tick ms search-select" data-placeholder="Select" show-tick ms search-select" data-placeholder="Select" style="width:100%;" name="cate" required>
                               
        <option value="none">--none--</option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM employee ')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?=$row3['fullname'];?>"><?=$row3['fullname'];?></option>
<?php 

}
?>               
                           </select>
          </div>
                <!-- /.input group -->
          </div>
              <!-- /.form group --><br>
             <a href="#" onclick="document.forms['Emplyees'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
        
         
            <!-- /.box-body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingTwo_5">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseTwo_5" aria-expanded="false"
                                                aria-controls="collapseTwo_5"> <i class="ti-notepad"></i>&nbsp;&nbsp;&nbsp;Products    </a> </h4>
                                    </div>
                                    <div id="collapseTwo_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_5">
                                        <div class="panel-body"> 
                                            <form name="Products" method="POST" action="../report_selling/product.php" target="_blank">
            
          <div class="form-group col-md-6">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
          <div class="form-group col-md-6">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-compressed"></i>
              </div>
            <select class="form-control select2" style="width:100%;" name="cate" required>
                               
        <option value="none">--none--</option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM items WHERE expired_date>= CURDATE() ORDER BY id')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?=$row3['item_name'];?>"><?=$row3['item_name'];?></option>
<?php 

}
?>               
                           </select>
          </div>
                <!-- /.input group -->
          </div>
              <!-- /.form group --><br>
             <a href="#" onclick="document.forms['Products'].submit(); return false;">
         &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
                                         </div>
                                    </div>
                                </div>
                                    <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingTwo_5">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseTwo_9" aria-expanded="false"
                                                aria-controls="collapseTwo_5"> <i class="ti-bookmark-alt"></i>&nbsp;&nbsp;&nbsp;Customers   </a> </h4>
                                    </div>
                                    <div id="collapseTwo_9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_5">
                                        <div class="panel-body"> 
                                            <form name="Customers" method="POST" action="../report_selling/customer.php" target="_blank">
            
          <div class="form-group col-md-6">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
          <div class="form-group col-md-6">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-compressed"></i>
              </div>
            <select class="form-control select2" style="width:100%;" name="cate" required>
                               
        <option value="none">--none--</option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM customer ')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?=$row3['fullname'];?>"><?=$row3['fullname'];?></option>
<?php 

}
?>               
                           </select>
          </div>
                <!-- /.input group -->
          </div>
              <!-- /.form group --><br>
               <a href="#" onclick="document.forms['Customers'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display">Display</button></a>
        </form>
                                         </div>
                                    </div>
                                </div>

                                     <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingTwo_5">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseTwo_7" aria-expanded="false"
                                                aria-controls="collapseTwo_5"> <i class="ti-bookmark-alt"></i>&nbsp;&nbsp;&nbsp;Invoices   </a> </h4>
                                    </div>
                                    <div id="collapseTwo_7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_5">
                                        <div class="panel-body"> 
                                            <form name="invoices" method="POST" action="../report_selling/invoice.php" target="_blank">
            
          <div class="form-group col-md-6">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
          <div class="form-group col-md-6">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-compressed"></i>
              </div>
            <select class="form-control select2" style="width:100%;" name="cate" required>
                               
        <option value="none">--none--</option>
<?php
$query3=mysqli_query($conn,'SELECT * FROM invoice ')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?=$row3['order_id'];?>"><?=$row3['order_id'];?></option>
<?php 

}
?>               
                           </select>
          </div>
                <!-- /.input group -->
          </div>
              <!-- /.form group --><br>
               <a href="#" onclick="document.forms['invoices'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display">Display</button></a>
        </form>
                                         </div>
                                    </div>
                                </div>

                                <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingThree_5">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseThree_5" aria-expanded="false"
                                                aria-controls="collapseThree_5"> <i class="ti-notepad"></i>&nbsp;&nbsp;&nbsp;All    </a> </h4>
                                    </div>
                                    <div id="collapseThree_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_5">
                                        <div class="panel-body">
                                              <form name="alls" method="POST" action="../report_selling/all.php" target="_blank">
            
          <div class="form-group col-md-6">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-5">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
             <a href="#" onclick="document.forms['alls'].submit(); return false;">
         &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>