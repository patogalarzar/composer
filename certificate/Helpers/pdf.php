<?php namespace App\Helpers;
	/**
	* 
	*/
	require "../vendor/autoload.php";
	use Dompdf\Dompdf;
	class Pdf 
	{
		public static function render($file, $html)
		{
			
			//generate some PDFs!
			$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
			$dompdf->load_html($html);
			$dompdf->setPaper('A5', 'landscape');
			$dompdf->render();
			$dompdf->stream($file.".pdf", array("Attachment"=>0));
		}
	}
 ?>