<?php
require('pdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Ah hola :D',0,2);
$pdf->SetFont('Times','I',20);
$pdf->SetTextColor(50,10,100);
$pdf->SetFillColor(210,100,2);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(110,50,90);
$pdf->MultiCell(190,20,'Centro de Estudios Tecnologicos Industriales y de Servicios No.84','LR',1,'C',true);
$pdf->SetFont('Courier','',18);
$pdf->SetTextColor(50,10,200);
$pdf->Cell(40,10,'Desarolla Aplicaciones con Conexion a Base de Datos',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(30,67,100);
$pdf->Cell(40,10,'Daniel Ramirez Flores',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(40,100,40);
$pdf->Cell(40,10,'Gabriel Ignacio China Cortez',0,1);
$pdf->Output();
?>