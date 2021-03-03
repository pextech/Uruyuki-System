<!doctype html>
<html class="no-js " lang="en">
   <?php include'../header/header.php'; ?>
<body class="theme-blush">

<!-- Page Loader -->
<?php
if (isset($_GET['delete_id'])) {
$id = $_GET['delete_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM items WHERE id='$id'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../items/'</script>";
}
?>

<?php include '../link/link.php'; ?>

<?php include'../link/theme.php'; ?>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Stock Items</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> <?php include('../dist/includes/head.php');?></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Items</a></li>
                        <li class="breadcrumb-item active">Stock Items</li>
                    </ul>
                    <br>
                    <div class="col-md-2">
     <button class="btn btn-sm btn-success" ><a href="#" data-toggle="modal" data-target="#itmes"> New Items</a></button>
   </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

     


<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Stock</strong> Items </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Barcode</th>
            <th>Item_name</th>
            <th data-breakpoints="xs">Quantity</th>
            <th>Price</th>
            <th>Cost</th>
            <th>Total</th>
            <th>Unit</th>
            <th>Expired_date</th>
            <th>Taxes</th>
            <th>Stock</th>
            <th>Actions</th>
          </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Barcode</th>
            <th>Item_name</th>
            <th data-breakpoints="xs">Quantity</th>
            <th>Price</th>
            <th>Cost</th>
            <th>Total</th>
            <th>Unit</th>
            <th>Expired_date</th>
            <th>Taxes</th>
            <th>Stock</th>
            <th>Actions</th>
          </tr>
                                    </tfoot>
                                    <tbody>
                                    	<?php
include("../config/index.php");
  $stmt = $DB_con->prepare('SELECT * FROM items WHERE expired_date<= CURDATE() ORDER BY id');
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);
      
      
      ?>
                                        <tr>
                                            <td><?=$id; ?></td>
          <td><?=$barcode; ?></td>
          <td><?=$item_name; ?></td>
          <td><?=$quantity; ?></td>
          <td><?=$price; ?></td>
          <td><?=$cost; ?></td>
          <td><?=$total; ?></td>
          <td><?=$unit; ?></td>
          <td><?=$expired_date  ; ?></td>
          <td><?=$taxes; ?></td>
          <td><?=$stock; ?></td>
          <td><a class="btn btn-info" href="#" data-toggle="modal" data-target="#Supplierup<?php echo $id; ?>"> <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div></a>&nbsp;&nbsp;<a class="btn btn-danger" href="?delete_id=<?=$id ?>" title="click for delete" onclick="return confirm('Are you sure to remove <?=$item_name; ?>?')"><div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div></a></td>
          
          <?php include '../update/items.php'; ?>
                                        </tr>
                                       <?php
    }
    
  
  }
  else
  {
    ?>
    
      
        <div class="col-xs-12">
          <div class="alert alert-warning">
              <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Items Found ...
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
                </div>
            </div>



</div>
</section>

<?php include'../fjs/index.php'; ?>
<?php include'../fjs/other.php'; ?>
<script src="../assets/js/jquery-dynamic-form.js"></script>
   <script>
$(document).ready(function()
{ 
$("#in").dynamicForm("#inplus", "#inminus", {limit:50, createColor: 'yellow',removeColor: 'red'});
$("#other").dynamicForm("#otherplus", "#otherminus", {limit:50, createColor: 'yellow',removeColor: 'red'});
});
</script>
</body>
</html>