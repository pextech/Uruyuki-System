<div class="modal fade" id="Supplierup<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
            <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">Update <?php echo $item_name; ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                            <form  method="POST" action="../dist/includes/mpages/itemsup.php" name="iteup">

   <input type="hidden" name="id" value="<?php echo $id; ?>">
               
                  <label>Barcode</label>
                <input type="text" name = "Barcode" class="form-control" value="<?php echo $barcode; ?>">
                  <br/>
                 <label for="subject">Item_name</label>
                <input type="text" name = "Name" class="form-control" value="<?php echo $item_name; ?>">
                  <br/>
                  <label for="subject">Price</label>
                <input type="number" name = "price" class="form-control" value="<?php echo $price; ?>">
                  <br/>

                  <label for="subject">Cost</label>
                <input type="number" name = "cost" class="form-control" value="<?php echo $cost; ?>">
                  <br/>

                  <label >Unit</label>
                <input type="text" name = "unit" class="form-control" value="<?php echo $unit; ?>">
                  <br/>
                 <label for="subject">Measure</label>
                <input type="text" name = "measure" class="form-control" value="<?php echo $measure; ?>">
                  <br/>
                 <label for="subject">Categories</label>
                <input type="text" name = "category" class="form-control" value="<?php echo $category; ?>">
                  <br/>
                  <label for="subject">Lot</label>
                <input type="text" name = "lot" class="form-control" value="<?php echo $lot; ?>">
                  <br/>
                  <label >Taxes</label>
                   <input type="text" name = "taxes" class="form-control" value="<?php echo $taxes; ?>">
                  <br/>

                  <label >Stock</label>
                  <input type="text" name = "stock" class="form-control" value="<?php echo $stock; ?>">
                  <br/>
   
                      </div>
                        <div class="modal-footer">
                           <a href="#" onclick="document.forms['iteup'].submit(); return false;">
                           <button  name = "update" class="btn btn-primary">Save Information</button></a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
        </div>
