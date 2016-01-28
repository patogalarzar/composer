<?php 
// Composer's auto-loading functionality
require "../vendor/autoload.php";

$data = array(	"name" => "Juan Carlos Idrovo Cardenas",
				"course" => "Composer & DOMPDF"
			);

$html =Template::render('pdf/certificate',$data);

// die($html);
// exit();
use Dompdf\Dompdf;

//generate some PDFs!
$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
$dompdf->load_html($html);
$dompdf->setPaper('A5', 'landscape');
$dompdf->render();
$dompdf->stream("certificate.pdf", array("Attachment"=>0));
?>