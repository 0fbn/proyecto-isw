<?php
require('FPDF/fpdf.php');
require('conexion.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('imagenes/logo.png',65,8,70);
$pdf->Ln(30);
$pdf->SetFont('Arial','B',24);
$pdf->Cell(50,10,'Resumen De Clientes');
$pdf->Ln(15);

$pdf->SetFont('Arial','B',14);
$pdf->Cell(80,10,'Nombre');
$pdf->Cell(50,10,'Rut');
$pdf->Cell(80,10,'Correo');
$pdf->Ln(8);



$pdf->Output();
?>

