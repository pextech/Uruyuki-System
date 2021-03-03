<div class="col-md-4">
                                    <div class="form-group">
                                       <center>  <b><h5>Items Details</h5></b></center>
<center>  ---------------------------------------------------</center>
                                        
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                          
                          

                            <?php

                            $check = "SELECT customer FROM order_status where stock_status='in' and sale_status='pending' AND order_id='$invoice'";
                            $result = mysqli_query($conn, $check);
                           $row = mysqli_fetch_assoc($result);
                           if( $row["customer"] == null){
   //run this code        ?>
                                Supplier 

     <button class="btn btn-sm btn-success" ><a href="#" data-toggle="modal" data-target="#Supplier"><font color="white"><b> New Supplier </b></font></a></button>
  </header>
  <div  role="alert" >
          <input type="text" onkeyup="showcustomer(this.value)" class="form-control" style="color: black;" placeholder="search by Name Or Phone " aria-describedby="basic-addon2">
          <div id="showcustomer"></div><br>
            </div>
            <?php
                        }
                           else{
                            ?>
                               <input type="text" onkeyup="showcustomer(this.value)" class="form-control" style="color: black;"  value="<?php echo $row["customer"]; ?>" aria-describedby="basic-addon2">
                               <div id="showcustomer"></div><br>
                            <?php
                           }

                             ?>