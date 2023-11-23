<?php

require_once "../../../config/config.php";
require "../../../library/fpdf/fpdf.php";


$pdf = new FPDF('P','mm','A4');
$pdf -> AddPage();

$pdf-> SetFont('Times','B','13');
$pdf-> Cell(200,10,'Data test',0,0,'C');

$pdf-> Output();


?>