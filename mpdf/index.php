<?php 
ob_start();
?>

<h1>Olá mundo</h1>

<?php 
$html = ob_get_contents();
ob_end_clean();

require 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>