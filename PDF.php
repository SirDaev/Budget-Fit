<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE);

$html = "<style>
			
		</style>";

$html .= "<table style='border: none; margin-bottom: 30px; width: 100%;'>
			<tr>
				<td style='width: 110px;'>
					<img src='http://davejudd.com/client/budget/images/logo.png' style='float: left; vertical-align: middle; width: 110px; height: auto;' />
				</td>
				<td style='padding-left: 30px;'>
					<p style='font-size: 40px; font-family: sans-serif;'>Budget Fit</p>
				</td>
			</tr>
			<tr>
				<td style='border-bottom: 1px solid #bbb; height: 15px;' colspan='2'>
				</td>
			</tr>
		</table>";

$html .= "<table cellpadding='8px' style='border-collapse: collapse;'>
			<tr>
				<td>";

$counter = 1;

foreach ($_POST as $key => $value) {
	
	if ($key != 'submit' && $key != 'project-name') {
		$html .= $value;
		if ($counter === 3) {
			$html .= "</td></tr><tr><td>";
			$counter = 1;
		} else {
			$html .= "</td><td>";
			$counter++;
		}
	}
	
}

if ($counter != 3) {
	$html .= "last</td></tr>";
}
$html .= "</table>";

$html .= "<p>Thank you for using Budget Fit! <a href='http://www.budgetfit.net/'>www.budgetfit.net</a></p>";

//==============================================================
//==============================================================
//==============================================================

include("PDF/mpdf.php");
$mpdf=new mPDF('c'); 

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>