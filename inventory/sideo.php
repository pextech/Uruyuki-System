 <div id="livesearch"></div>
        <table class="table" ui-jq="footable" cellspacing="pixels">
        <thead>
          <tr>
            <th   data-breakpoints="xs"><font color="black">Delete</font></th>
            <th ><font color="black">Barcode</font></th>
            <th ><font color="black">Name</font></th>
            <th ><font color="black">Qty</font></th>
            <th  data-breakpoints="xs"><font color="black">Waste</font></th> 
            <th  data-breakpoints="xs"><font color="black">Exp</font></th> 
            <th ><font color="black">Total</font></th>
            <th ><font color="black">Update</font></th>
          </tr>
        </thead>
         <tbody bgcolor="white" style="overflow-y: auto;max-height: 325px;min-width: 665px;">
         <?php 

         include("../config/index.php");



$invoice=$_SESSION['invoice'];
  $stmt = $DB_con->prepare("SELECT * FROM order_status WHERE stock_status='inve' AND sale_status='pending' AND order_id='$invoice' ORDER BY id DESC");
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);

          ?>
          <form name="refreshd" action="../dist/includes/mpages/refreshinve.php" method="POST">
          <tr>
            <input type="hidden" name="id[]" value="<?=$id; ?>">
          <td><a class="btn btn-danger"  href="?delete_id=<?= $id ?>" title="click for delete" onclick="return confirm('Are you sure to remove <?php echo $item; ?>?')"><div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div></a></td>
           <td>
            <input type="hidden" name="barcode[]" value="<?=$barcode; ?>">
            <?=$barcode; ?>
              
            </td>
           <td>
             <input type="hidden" name="item[]" value="<?=$item; ?>">
            <?=$item; ?>
              
            </td>
           <td>
             <?php 
              $aty=mysqli_query($conn,"SELECT * FROM items WHERE item_name='$item'");
              $ft=mysqli_fetch_array($aty);
              $qtyi=$ft['quantity'];
              //var_dump($qtyi);
               ?>
              <input type="hidden" name="cost[]" value="<?=$qtyi; ?>">
            <?=number_format($qtyi); ?>
              
            </td>
           <td><input type="text" name="qty[]" size="5" value="<?=$qty; ?>"></td>
           <td><input type="text" name="exp[]" size="5" value="<?=$qty; ?>"></td>
           <td>
             <input type="hidden" name="total[]" value="<?=$total; ?>">
            <?=number_format($total); ?>
              
            </td>
           <td><a href="#" onclick="document.forms['refreshd'].submit(); return false;"><button class="btn btn-primary" ><div ><i class="ti-exchange-vertical"></i></div></button></a></td>
           </tr>
           </form>
          <?php
    }
    
  
  }
  else
  {
    ?>
    
      
        <div class="col-xs-12">
          <div class="alert alert-warning">
              <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No item Found  in Cart...
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