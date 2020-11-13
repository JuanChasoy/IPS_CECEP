<?php
	include 'Plantilla.php';
	require 'conexionPDF.php';
	
    $consulta = $mysqli->query("SELECT * FROM tb_empleados");
	
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
    $pdf->SetFillColor(116, 226, 250);
    
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'ID EMPLEADO',1,0,'C',1);
	$pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(50,6,'CEDULA',1,1,'C',1);
    
    
    $pdf->SetFont('Arial','',10);
    
	

    $consulta = $mysqli->query("SELECT * FROM tb_empleados");
while($resultado = mysqli_fetch_array($consulta)){
$pdf->Cell(40,5,$resultado['id_empleado'],1,0,'C');
$pdf->Cell(50,5,$resultado['nom_empleado'],1,0,'C');
$pdf->Cell(50,5,$resultado['cedu_emplado'],1,0,'C');
$pdf->Ln();
}  

	$pdf->Output();
?>