<?php 
// Composer's auto-loading functionality
// require "../vendor/autoload.php";

$data = array(	"name"   => "Patricio Galarza",
				"course" => "Composer & DOMPDF"
			);

require "../certificate/template.php";
$html =Template::render('pdf/certificate',$data);

require "../certificate/pdf.php";
Pdf::render('certificate',$html);
?>