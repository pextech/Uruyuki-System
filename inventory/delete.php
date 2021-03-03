<!-- Page Loader -->
<?php
if (isset($_GET['delete_id'])) {
$id = $_GET['delete_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM order_status WHERE id='$id'  AND stock_status='inve' AND sale_status='pending'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../inventory/'</script>";
}
if (isset($_GET['delete_allid'])) {
$id = $_GET['delete_allid'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM order_status WHERE order_id='$id'  AND stock_status='inve' AND sale_status='pending'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../inventory/'</script>";
}
if (isset($_GET['pay_id'])) {
$id = $_GET['pay_id'];
//$edit_state = true;
mysqli_query($conn,"DELETE FROM payment WHERE order_id='$id'  AND stock_status='inve' AND sale_status='pending'");
//$record = mysqli_fetch_array($rec);
echo "<script>window.location='../inventory/'</script>";
}
?>
 <script>
function showResult(str)
{
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("txtHint").innerHTML="";
  
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","search.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function showcustomer(str)
{
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("txtHint").innerHTML="";
  
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showcustomer").innerHTML=xmlhttp.responseText;
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    document.getElementById("showcustomer").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","customer.php?q="+str,true);
xmlhttp.send();
}
</script>