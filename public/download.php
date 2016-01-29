<?php 
// Composer's auto-loading functionality
require "../vendor/autoload.php";

$data = array(	"name"   => "Patricio Galarza",
				"course" => "Composer & DOMPDF"
			);

$html = App\Core\Template::render('pdf/certificate',$data);
App\Helpers\Pdf::render('certificate',$html);
?>