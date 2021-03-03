         <div class="modal fade" id="Supplierup<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
            <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">Update <?php echo $fullname; ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                         <form name="emplup" action = "../dist/includes/mpages/employeeup.php" method="post" enctype="multipart/form-data"> 
                           
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
               
                  <label>fullname</label>
                <input type="text" name = "Supplier" class="form-control" value="fullname">
                  <br/>
                  <label>Username</label>
                <input type="text" name = "Username" class="form-control" value="<?php echo $username; ?>">
                  <br/>
                  <label>Password</label>
                <input type="password" name = "Password" class="form-control">
                  <br/>
                 <label for="subject">phone number</label>
                <input type="number" name = "phone" class="form-control" value="<?php echo $phone; ?>">
                  <br/>
                  <label for="subject">Email</label>
                <input type="email" name = "Email" class="form-control" value="<?php echo $email; ?>">
                  <br/>
                  <label for="subject">National Id</label>
                <input type="text" name = "Location" class="form-control" value="<?php echo $nid; ?>">
                  <br/>
                  <label>Post</label>
             <select  name = "ePosts" class = "form-control show-tick ms search-select">
                <?php 
                  include('../dist/includes/dbcon.php');                
                    $query1=mysqli_query($conn,"select * from branch ORDER BY branch_id ASC")or die(mysqli_error($conn));
                    while ($row1=mysqli_fetch_array($query1)){
                      $id=$row1['branch_id'];
              ?>
              <option value = "<?php echo $row1['branch_id'];?>"><?php echo $row1['branch_name'];?></option>  
              <?php } ?>
              </select>
                  <br/> <br/> <br/>
                   <a href="#" onclick="document.forms['emplup'].submit(); return false;">    
              <button  name = "update" class="btn btn-primary">Save Information</button></a>
            </form>
            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
        </div>