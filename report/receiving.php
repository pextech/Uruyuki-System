
<div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Reports</strong> Receivings</h2>
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
                           
                            <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingOne_1">
                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1"> <i class="ti-id-badge"></i>&nbsp;&nbsp;&nbsp;Emplyees  </a> </h4>
                                    </div>
                                    <div id="collapseOne_1" class="panel-collapse collapse in" role="tablist" aria-labelledby="headingOne_1">
                                        <div class="panel-body"> 
                                              <form name="Emplyeer" method="POST" action="../receiving_report/employee.php" target="_blank">

            
          <div class="form-group col-md-4">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-4">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
          <div class="form-group col-md-4">
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
               <a href="#" onclick="document.forms['Emplyeer'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
                                         </div>
                                    </div>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingOne_9">
                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_9" aria-expanded="true" aria-controls="collapseOne_1"><i class="ti-truck"></i>&nbsp;&nbsp;&nbsp;Supplier  </a> </h4>
                                    </div>
                                    <div id="collapseOne_9" class="panel-collapse collapse in" role="tablist" aria-labelledby="headingOne_9">
                                        <div class="panel-body"> 
                                              <form name="supplieer" method="POST" action="../receiving_report/customer.php" target="_blank">

            
          <div class="form-group col-md-4">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-4">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>
          <div class="form-group col-md-4">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
             <i class="fa fa-users"></i>
              </div>
            <select class="form-control show-tick ms search-select" data-placeholder="Select" show-tick ms search-select" data-placeholder="Select" style="width:100%;" name="cate" required>
                               
<?php
$query3=mysqli_query($conn,'SELECT * FROM Supplier ')or die(mysqli_error($conn));
while($row3=mysqli_fetch_array($query3)){

?>
<option value="<?=$row3['name'];?>"><?=$row3['name'];?></option>
<?php 

}
?>               
                           </select>
          </div>
                <!-- /.input group -->
          </div>
              <!-- /.form group --><br>
               <a href="#" onclick="document.forms['supplieer'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
                                         </div>
                                    </div>
                                </div>

                                  <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingOne_8">
                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_8" aria-expanded="true" aria-controls="collapseOne_1"><i class="ti-notepad"></i>&nbsp;&nbsp;&nbsp;Purchase Order  </a> </h4>
                                    </div>
                                    <div id="collapseOne_8" class="panel-collapse collapse in" role="tablist" aria-labelledby="headingOne_8">
                                        <div class="panel-body"> 
                                              <form name="Purchase" method="POST" action="../receiving_report/Purchase.php" target="_blank">

            
          <div class="form-group col-md-4">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day1">
          </div>
                <!-- /.input group -->
          </div>

          <div class="form-group col-md-4">
            <label></label>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
              </div>
            <input class="form-control select2" type="Date" name="day2">
          </div>
                <!-- /.input group -->
          </div>

              <!-- /.form group --><br>
               <a href="#" onclick="document.forms['Purchase'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
                                         </div>
                                    </div>
                                </div>

                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingTwo_1">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                                aria-controls="collapseTwo_1"> <i class="ti-notepad"></i>&nbsp;&nbsp;&nbsp;Products  </a> </h4>
                                    </div>
                                    <div id="collapseTwo_1" class="panel-collapse collapse" role="tablist" aria-labelledby="headingTwo_1">
                                        <div class="panel-body"> 
                                            <form name="Productr" method="POST" action="../receiving_report/product.php" target="_blank">
            
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
$query3=mysqli_query($conn,'SELECT * FROM items  ORDER BY id')or die(mysqli_error($conn));
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
                <a href="#" onclick="document.forms['Productr'].submit(); return false;">
         &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="display" >Display</button></a>
        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingThree_1">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                                aria-controls="collapseThree_1"><i class="ti-notepad"></i>&nbsp;&nbsp;&nbsp;All  </a> </h4>
                                    </div>
                                    <div id="collapseThree_1" class="panel-collapse collapse" role="tablist" aria-labelledby="headingThree_1">
                                        <div class="panel-body">
                                             <form name="allr" method="POST" action="../receiving_report/all.php" target="_blank">
            
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
          </div>
                <!-- /.input group -->
          </div>
              <!-- /.form group --><br>
                 <a href="#" onclick="document.forms['allr'].submit(); return false;">
        &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="display">Display</button></a>
        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>