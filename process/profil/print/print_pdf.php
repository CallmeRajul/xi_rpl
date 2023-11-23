<?php

require_once "../../../config/config.php";
require "../../../library/fpdf/fpdf.php";

session_start();

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// Add banner
$pdf->Image('../../../dist/img/banner.jpg', 10, 10, 190);

// Set font for the title
$pdf->SetFont('Times', 'B', 16);

// Move to a new line after printing the title
$pdf->Ln(40);

// Center the title
$pdf->Cell(0, 10, 'Bio', 0, 1, 'C');

// Set font for user data
$pdf->SetFont('Arial', '', 12);

// Add some space before printing user data
$pdf->Ln(10);

// Include user data from sessions
$pdf->Cell(0, 10, 'Name: ' . $_SESSION['name'], 0, 1);
$pdf->Cell(0, 10, 'Nis ' . $_SESSION['nis'], 0, 1);
$pdf->Cell(0, 10, 'Phone: ' . $_SESSION['phone'], 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $_SESSION['email'], 0, 1);
$pdf->Cell(0, 10, 'Class: ' . $_SESSION['class'], 0, 1);
$pdf->Cell(0, 10, 'Birth: ' . $_SESSION['birth'], 0, 1);
$pdf->Cell(0, 10, 'Address: ' . $_SESSION['address'], 0, 1);
$pdf->Cell(0, 10, 'Description: ' . $_SESSION['description'], 0, 1);

$pdf->Output();

?>
