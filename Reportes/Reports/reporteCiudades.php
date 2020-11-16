<?php

require('../fpdf.php');
require('../conexion.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../ipslogo.png',185, 5, 22,22);
    // Arial bold 15
    $this->SetFont('Arial','B',25);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->SetTextColor(16,87,97);
    $this->Cell(70,15,'Reporte de Ciudades',0,0,'C');
    $this->SetDrawColor(61,174,233);
    $this->SetLineWidth(2);
    $this->Line(60, $this->GetY() + 15, 150, $this->GetY() + 15);
    // Salto de línea
    $this->Ln(40);

    // Encabezados de tablas
    $this->SetTextColor(255, 255, 255);
    $this->SetFillColor(107, 214, 235 );
    $this->SetFontSize(15);
    $this->SetDrawColor(0);
    $this->SetLineWidth(0);
    $this->Cell(50, 10, 'Id_Ciudad', 1, 0, 'C', 1);
    $this->Cell(50, 10, 'Ciudad', 1, 0, 'C', 1);
    $this->Cell(50, 10, 'Pais', 1, 0, 'C', 1);
    $this->Ln();
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',18);
    $this->SetTextColor(255,255,225);
    $this->SetFillColor(12, 143, 200);
    // Número de página    
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'-{nb}',0,0,'C', 1);
}
}

#$consulta = "SELECT nom_pais FROM tb_pais";
$consulta = "SELECT * FROM tb_ciudades";
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
        $pdf->SetFillColor(224,235,255);
    }else{
        $fill = !$fill;
        $pdf->SetFillColor(255, 255, 255);
    }
    $pdf->Cell(50, 10, $row['id_ciudad'], 1, 0, 'C', 1);
    $pdf->Cell(50, 10, $row['nom_ciudad'], 1, 0, 'C', 1);
    $pdf->Cell(50, 10, $row['id_pais'], 1, 0, 'C', 1);
    $pdf->Ln();
    
}

$pdf->Output();
?>