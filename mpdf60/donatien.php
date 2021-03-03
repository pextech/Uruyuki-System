<?php
echo"<font color='red'> Welcome in MPDF Library";

echo"<table border=1> <tr> <th> Student Code </th> </tr> </table>";
?>
<?php
//==============================================================
//==============================================================
//==============================================================
include("mpdf.php");
$report_content=ob_get_contents();
$mpdf=new mPDF('P','A4'); 

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($report_content);

$mpdf->Output();
exit;


?>