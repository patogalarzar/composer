<?php 
	class Pdf {
		
		public static function render($file, $html)
		{
			use Dompdf\Dompdf;
			//generate some PDFs!
			$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
			$dompdf->load_html($html);
			$dompdf->setPaper('A5', 'landscape');
			$dompdf->render();
			$dompdf->stream($file.".pdf", array("Attachment"=>0));
		}
	}
 ?>