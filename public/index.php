<?php 
// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

ob_start();
include "../templates/pdf/certificate.php";
$html = ob_get_clean();

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Get the generated PDF file contents
$pdf = $dompdf->output();

// Output the generated PDF to Browser
$dompdf->stream();
