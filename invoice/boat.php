




<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                          
                            <div class="row">                                
                                <div class="col-md-6 col-sm-6">
                                   
                                    <h4>    <strong>Go tell Tours & Travel</strong><br></h4>
                                       
                                  <p class="mb-0"><strong>Order Date: </strong> Dec 05, 2020</p>
                                    <p class="mb-0"><strong>Order Status: </strong> <span class="badge badge-info">Pending</span></p> 
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                                                       
                                </div>
                            </div>
                        </div>                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped" border="1" width="100%">
                        <tr>
                         
                  <th bgcolor="#cbc9c9" color="black">Date</th>
                   <th bgcolor="#cbc9c9" color="black">Service</th>
                   <th bgcolor="#cbc9c9" color="black">Boats</th>
                   <th bgcolor="#cbc9c9" color="black">Unit Cost</th>
                   <th bgcolor="#cbc9c9" color="black">Total</th>
                  
                </tr>
       
                                        <tbody>
                                            <tr>
                                                <td>11 December 2020</td>
                                                <td>Boats For Fishermen</td>
                                                <td>6 Boats</td>
                                                <td>45,000 rwf</td>
                                                <td>270,000 rwf</td>
                                            </tr>
                                            <tr>
                                                <td>13 December 2020</td>
                                                <td>Boats For Fishermen</td>
                                                <td>12 Boats</td>
                                                <td>45,000 rwf</td>
                                                <td>540,000 rwf</td>
                                            </tr>
                                            <tr>
                                                <td colspan='4' align='right'>Total Price:</td>
                                                <td>810,000 rwf</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

          
  
                     <?php
       
include("../mpdf60/mpdf.php");
//$mpdf=new mPDF('A4', 'landscape'); 
$mpdf = new mPDF(); $stylesheet = file_get_contents('../mpdf60/pdf.css'); $mpdf->WriteHTML($stylesheet,1);
$mpdf->SetDisplayMode('fullpage');
//$mpdf->AddPage("L");

// LOAD a stylesheet
$stylesheet = file_get_contents('../mpdf60/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);  // The parameter 1 tells that this is css/style only and no body/html/text
$report_content=ob_get_contents();
ob_clean();

$mpdf->WriteHTML($report_content,2);
$mpdf->Output('Invoice','I');
exit; 
?>
     