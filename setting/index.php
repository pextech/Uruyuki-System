<!doctype html>
<html class="no-js " lang="en">
   <?php include'../header/header.php'; ?>
<body class="theme-blush">

<!-- Page Loader -->
  <?php
if (isset($_GET['delete_id'])) {
$id = $_GET['delete_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM measurement WHERE id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../setting/'</script>";
}
?>  
<?php
if (isset($_GET['delete_id'])) {
$id = $_GET['delete_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM stock WHERE id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../setting/'</script>";
}
?> 
<?php
if (isset($_GET['delete_id'])) {
$id = $_GET['delete_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM pmethod WHERE id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../setting/'</script>";
}
if (isset($_GET['categories_id'])) {
$id = $_GET['categories_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM category WHERE id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../setting/'</script>";
}
?>  
<?php include '../link/link.php'; ?>

<?php include'../link/theme.php'; ?>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Setting</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> <?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Setting</a></li>
                        <li class="breadcrumb-item active">System Setting</li>
                    </ul>
                    <br>
                    
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

 <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>System</strong> Setting</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                          

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs p-0 mb-3">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Company Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Product Unit</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">Stocks</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Payment Methods</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#categories">Categories</a></li>
                            </ul>                        
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane in active" id="home">
                                  <div class="row">
                                     <div class="col-md-8">
      <form name="compd" method="POST" action="../dist/includes/mpages/settingup.php" class="pull-left">
        <?php 
                  //include 'dbcon.php';                
                    $sel=mysqli_query($conn,"select * from setting  ORDER BY id ASC")or die(mysqli_error($conn));
                    while ($prc=mysqli_fetch_array($sel)){
                      $id=$prc['id'];
                      
                  ?>  
                  <input type="hidden" name="id" value="<?php echo $prc['id'];?>">
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Company Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="company" value="<?php echo $prc['company'];?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Company taxes</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="taxes" value="<?php echo $prc['taxes'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Location</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="Location" value="<?php echo $prc['location'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Phone Number</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="Phone" value="<?php echo $prc['phone'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Tin Number</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="Tin" value="<?php echo $prc['tin'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                         <br>
                          <a href="#" onclick="document.forms['compd'].submit(); return false;">
                          <button name = "login" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Update</button>
                        </a>
                        </div>
                      </div>
                      <?php } ?>
                </form>
                </div>
                <br><br><br>
                <div class="col-md-4">
             <img src="<?php echo (!empty($prc['logo'])) ? '../images/'.$prc['logo'] : '../images/logd.png'; ?>" >
      </div>
    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                  <div class="row">
          <div class = "col-md-4">
            <div class="x_panel">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add UNIT </h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form name="UNITsa" class="form-horizontal form-label-left" action = "../dist/includes/mpages/measins.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Unit</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" placeholder="add new unit" name = "cate" required autocomplete="off">
                          
                        </div>
                      </div>
                      
                      
                     
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                         <a href="#" onclick="document.forms['UNITsa'].submit(); return false;">
                          <button name = "login" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
      <div class = "col-md-8">
            <div class = "x-panel">
              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
               <thead>
                <tr>
                  <th>Id</th>
                  <th>Category</th>
                  <th>Delete</th>             
                </tr>
               </thead>
               
                <tfoot>
                  <tr>
                    <th>Id</th>
                  <th>Category</th>
                  <th>Delete</th>    
                  </tr>
              </tfoot>
               <tbody>
                  <?php 
                  //include 'dbcon.php';                
                    $sel=mysqli_query($conn,"select * from measurement  ORDER BY id ASC")or die(mysqli_error($conn));
                    while ($prc=mysqli_fetch_array($sel)){
                      $id=$prc['id'];
                      
                  ?>  
                <tr>
                  <td><?php echo $prc['id'];?></td>
                  <td><?php echo $prc['measure'];?></td>
                  <td><a class="btn btn-danger" href="?delete_id=<?php echo $prc['id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove <?php echo $prc['measure'];?>?')"><div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div></a></td>
                  
                  
                                
                </tr>
                    
                <?php }?>


               </tbody>               
             </table>
             
            </div>
          </div>
    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="row">
          <div class = "col-md-4">
            <div class="x_panel">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add stock </h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form name="stocksav" class="form-horizontal form-label-left" action = "../dist/includes/mpages/stockins.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">stock</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" placeholder="add new stock" name = "cate" required autocomplete="off">
                          
                        </div>
                      </div>
                      
                      
                     
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                         <a href="#" onclick="document.forms['stocksav'].submit(); return false;">
                          <button name = "login" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
      <div class = "col-md-8">
            <div class = "x-panel">
              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
               <thead>
                <tr>
                  <th>Id</th>
                  <th>stock</th>
                  <th>Delete</th>           
                </tr>
               </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                  <th>stock</th>
                  <th>Delete</th>   
                  </tr>
              </tfoot>
               <tbody>
                  <?php 
                  //include 'dbcon.php';                
                    $sel=mysqli_query($conn,"select * from stock  ORDER BY id ASC")or die(mysqli_error($conn));
                    while ($prc=mysqli_fetch_array($sel)){
                      $id=$prc['id'];
                      
                  ?> 
                <tr>
                  <td><?php echo $prc['id'];?></td>
                  <td><?php echo $prc['stock_name'];?></td>
                  <td><a class="btn btn-danger" href="?delete_id=<?php echo $prc['id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove <?php echo $prc['stock_name'];?>')"><div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div></a></td>
                  
                  
                                
                </tr>
                    
                <?php }?>


               </tbody>               
             </table>
             
            </div>
          </div>
    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                     <div class="row">
          <div class = "col-md-4">
             <div class="x_panel">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Payment Method </h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form name="Paymentsve" class="form-horizontal form-label-left" action = "../dist/includes/mpages/method.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Method</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" placeholder="add new Method" name = "cate" required autocomplete="off">
                          
                        </div>
                      </div>
                      
                      
                     
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                         <a href="#" onclick="document.forms['Paymentsve'].submit(); return false;">
                          <button name = "login" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
      <div class = "col-md-8">
            <div class = "x-panel">
              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
               <thead>
                <tr>
                   <th>Id</th>
                  <th>method</th>
                  <th>Delete</th>            
                </tr>
               </thead>
               <tfoot>
                  <tr>
                    <th>Id</th>
                  <th>method</th>
                  <th>Delete</th> 
                  </tr>
              </tfoot>
               <tbody>
                  <?php 
                  //include 'dbcon.php';                
                    $sel=mysqli_query($conn,"select * from pmethod  ORDER BY id ASC")or die(mysqli_error($conn));
                    while ($prc=mysqli_fetch_array($sel)){
                      $id=$prc['id'];
                      
                  ?> 
                 <tr>
                  <td><?php echo $prc['id'];?></td>
                  <td><?php echo $prc['method'];?></td>
                  <td><a class="btn btn-danger" href="?delete_id=<?php echo $prc['id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove <?php echo $prc['method'];?>?')"><div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div></a></td>
                  
                  
                                
                </tr>
                    
                <?php }?>


               </tbody>               
             </table>
             
            </div>
          </div>
    </div>
                                </div>
                                 <div role="tabpanel" class="tab-pane" id="categories">
                                    <div class="row">
          <div class = "col-md-4">
            <div class="x_panel">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add categories </h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form name="categories" class="form-horizontal form-label-left" action = "../dist/includes/mpages/categories.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-6 col-sm-6 col-xs-6">categories</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" placeholder="add new categories" name = "cate" required autocomplete="off">
                          
                        </div>
                      </div>
                      
                      
                     
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                         <a href="#" onclick="document.forms['categories'].submit(); return false;">
                          <button name = "login" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
      <div class = "col-md-8">
            <div class = "x-panel">
              <table class="table table-bordered table-striped table-hover dataTable js-exportable">
               <thead>
                <tr>
                  <th>Id</th>
                  <th>categories</th>
                  <th>Delete</th>           
                </tr>
               </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                  <th>categories</th>
                  <th>Delete</th>   
                  </tr>
              </tfoot>
               <tbody>
                  <?php 
                  //include 'dbcon.php';                
                    $sel=mysqli_query($conn,"select * from category  ORDER BY id ASC")or die(mysqli_error($conn));
                    while ($prc=mysqli_fetch_array($sel)){
                      $id=$prc['id'];
                      
                  ?> 
                <tr>
                  <td><?php echo $prc['id'];?></td>
                  <td><?php echo $prc['category'];?></td>
                  <td><a class="btn btn-danger" href="?categories_id=<?php echo $prc['id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove <?php echo $prc['stock_name'];?>')"><div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div></a></td>
                  
                  
                                
                </tr>
                    
                <?php }?>


               </tbody>               
             </table>
             
            </div>
          </div>
    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</div>
</section>

<?php include'../fjs/index.php'; ?>
<?php include'../fjs/other.php'; ?>
</body>
</html>