<?php 
include('headers.php');
?>

<table>
  <tr>
    
      <td>
        <b style="font-size: 300%;width: 130%;"><?php echo $name;?></b> 
      </td>
    
  </tr>
    <tr>
      <td>
    <h6>City: <?php echo $kgl;?></h6></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td>
    <h6>sector:<?php echo $sector;?></h6></td>
    </tr>
    <tr>
      <td>
    <h6>Tin:<?php echo $Tin;?></h6></td>
    </tr>
    <tr>
      <td>
    <h6>Phone number:<?php echo $phone;?></h6></td>
    </tr>
     </table>      
         <img src="<?php echo (!empty($prc['logo'])) ? '../images/'.$prc['logo'] : '../images/logd.png'; ?>" style="width: 22%;height: 17%;margin-left: 77%;margin-top: -19%;"><br>
        
        <table id="example1" class="table table-bordered table-striped" border="1" width="100%">
                        <tr>
                  <th bgcolor="#cbc9c9" color="black">Id</th>
                  <th bgcolor="#cbc9c9" color="black">Barcode</th>
                   <th bgcolor="#cbc9c9" color="black">Item</th>
                   <th bgcolor="#cbc9c9" color="black">price</th>
                   <th bgcolor="#cbc9c9" color="black">cost</th>
                   <th bgcolor="#cbc9c9" color="black">unit</th>
                   <th bgcolor="#cbc9c9" color="black">Measure</th>
                   <th bgcolor="#cbc9c9" color="black">Categories</th>
                   <th bgcolor="#cbc9c9" color="black">Lot</th>
                   <th bgcolor="#cbc9c9" color="black">Taxe</th>
                   <th bgcolor="#cbc9c9" color="black">Stock</th>
                </tr>
                    <tbody>
 <?php
     
include('dbcon.php');
         $results = mysqli_query($conn,"SELECT * FROM items ");
     while($row = mysqli_fetch_array($results)) { 
       // $pid=$row['item'];
      ?>
        
                <tr>
                  <td>
    <?php echo $row['id']; ?>
    </td>
      <td>
    <?php echo $row['barcode']; ?>
    </td>
      <td>
    <?php echo $row['item_name']; ?>
    </td>
      <td>
    <?php echo $row['price']; ?>
    </td>
      <td>
    <?php echo $row['cost']; ?>
    </td>
      <td>
    <?php echo $row['unit']; ?>
    </td>
      <td>
    <?php echo $row['measure']; ?>
    </td>
      <td>
    <?php echo $row['category']; ?>
    </td>
      <td>
    <?php echo $row['lot']; ?>
    </td>
      <td>
    <?php echo $row['taxes']; ?>
    </td>
      <td>
    <?php echo $row['stock']; ?>
    </td>
    </tr>
    <?php
    }
  ?> 
</tbody>
</table>


           
                        


                  