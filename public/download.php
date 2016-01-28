<?php 
// Composer's auto-loading functionality
require "../vendor/autoload.php";

ob_start();
require_once('../templates/pdf/certificate.php');
$html = ob_get_clean();

// var_dump($html);
// exit();
use Dompdf\Dompdf;

//generate some PDFs!
$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
$dompdf->load_html($html);
$dompdf->setPaper('A5', 'landscape');
$dompdf->render();
$dompdf->stream("certificate.pdf", array("Attachment"=>0));
?>