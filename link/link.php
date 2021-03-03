<?php

   
include('../dist/includes/dbcon.php');
 
    if(!isset($_SESSION['user_id']) || trim($_SESSION['user_id']) == ''){
        header('location: ../index.php');
    }
$id=$_SESSION['user_id'];
$_SESSION['user_id']=$id;
    $sql = "select * from employee natural join branch where id='$id'";
    $query = $conn->query($sql);
    $user = $query->fetch_assoc();
    
?>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="../assets/images/logd.png" width="75" alt="Aero"><span class="m-l-10"><?php include('../dist/includes/head.php');?></span></a>
    </div>
    <div class="menu">
        <ul class="list">
        
            <li>
                <div class="user-info">

                    <a class="image" href="#"><img src="<?php echo (!empty($user['photo'])) ? '../assets/images/'.$user['photo'] : '../assets/images/admin.png'; ?>" style="width: 75%;" alt="User"></a>
                    <div class="detail">
                        <h4><?php echo $user['fullname']; ?></h4>
                        <small style="background-color: green;color: white;padding: 5px;"><?php
                             
                             $user=$user['post']; 
                            $usr=mysqli_query($conn,"SELECT * FROM branch WHERE branch_id='$user'");
                            $fet=mysqli_fetch_array($usr);

                            echo $fet['branch_name'];

                             ?>
                                
                            </small>                        
                    </div>
                </div>
            </li>

            <li class="active open"><a href="../Dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

            <?php
include('../dist/includes/modals.php');
$branch=$_SESSION['role'];
$query=mysqli_query($conn,"select * from branch where branch_id='$branch'")or die(mysqli_error($conn));
  $row=mysqli_fetch_array($query);
           $branch_name=$row['branch_name'];
?>
             <?php
                   if ( $branch_name == 'admin'|| $branch_name == 'superadmin') {
                    echo'
            <li class="sort-amount-asc"><a href="../stock"><i class="ti-notepad"></i><span>Stock</span></a></li>';
            }
            ?>
            <?php
                   if ($branch_name == 'Cashier' || $branch_name == 'admin'|| $branch_name == 'superadmin') {
                    echo'
             <li class="sort-amount-asc"><a href="../selling"><i class="ti-shopping-cart-full"></i><span>Selling</span></a></li>';}
                ?><?php
                   if ($branch_name == 'superadmin') {
                    echo'

            <li class="sort-amount-asc"><a href="../employee"><i class="ti-id-badge"></i><span>Emplyees</span></a></li>';
            }?> <?php
                   if ( $branch_name == 'admin'|| $branch_name == 'superadmin') {
                    echo'

           <li class="sort-amount-asc"><a href="../customer"><i class="ti-user"></i><span>Customer</span></a></li>';
            }?> <?php
                   if ( $branch_name == 'admin'|| $branch_name == 'superadmin') {
                    echo'

           <li class="sort-amount-asc"><a href="../Suplier"><i class="ti-truck"></i><span>Supplier</span></a></li>';
            }?> <?php
                   if ( $branch_name == 'admin'|| $branch_name == 'superadmin') {
                    echo'

            <li class="sort-amount-asc"><a href="../report"><i class="ti-bookmark-alt"></i><span>Report</span></a></li>';
            }?> <?php
                   if ($branch_name == 'Cashier' || $branch_name == 'admin'|| $branch_name == 'superadmin') {
                    echo'
             <li class="sort-amount-asc"><a href="../refund"><i class="ti-shopping-cart-full"></i><span>Refund</span></a></li>';}
                ?>
    </div>
</aside>