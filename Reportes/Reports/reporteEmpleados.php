<?php
include '../newplantilla.php';
require('../fpdf.php');
require('../conexion.php');
//require('../php/Empleados/Empleado_Modelo.php');


$consulta = "SELECT * FROM tb_empleados";
$resultado = $mysqli->query($consulta);
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

$fill = false;
while($row = $resultado->fetch_assoc()){
    if($fill){
        $fill = !$fill;
        $pdf->SetFillColor(203, 236, 245);
    }else{
        $fill = !$fill;
        $pdf->SetFillColor(76, 89, 92);
    }
    $pdf->Cell(40, 10, $row['nom_empleado'], 1, 0, 'C', 1);
    $pdf->Cell(35, 10, $row['cedu_emplado'], 1, 0, 'C', 1);
    $pdf->Cell(30, 10, $row['celu_empleado'], 1, 0, 'C', 1);
    $pdf->Cell(30, 10, $row['dire_empleado'], 1, 0, 'C', 1);
    $pdf->Cell(55, 10, $row['email_empleado'], 1, 1, 'C', 1);
    
}

$pdf->Output();
?>