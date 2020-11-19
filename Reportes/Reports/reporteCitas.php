<?php
require('../fpdf.php');
require('../conexion.php');
//require('../php/Empleados/Empleado_Modelo.php');

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
    $this->Cell(70,15,'Reporte de Citas',0,0,'C');
    $this->SetDrawColor(61,174,233);
    $this->SetLineWidth(2);
    $this->Line(60, $this->GetY() + 15, 150, $this->GetY() + 15);
    // Salto de línea
    $this->Ln(40);

    // Encabezados de tablas
    $this->SetTextColor(255, 255, 255);
    $this->SetFillColor(22, 171, 236);
    $this->SetFontSize(15);
    $this->SetDrawColor(0);
    $this->SetLineWidth(0);
    $this->Cell(25, 10, 'Nombre', 1, 0, 'C', 1);
    $this->Cell(25, 10, 'Cedula', 1, 0, 'C', 1);
    $this->Cell(35, 10, 'Correo', 1, 0, 'C', 1);
    $this->Cell(25, 10, 'Sede', 1, 0, 'C', 1);
    $this->Cell(35, 10, 'Servicio', 1, 0, 'C', 1);
    $this->Cell(25, 10, 'Medico', 1, 0, 'C', 1);
    $this->Cell(25, 10, 'Fecha', 1, 1, 'C', 1);
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
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C', 1);
    
}
}


//$consulta = "SELECT * FROM tb_citas";
$consulta = "SELECT nom_usu_cita, cedu_usu_cita, correo_cita, sd.nom_sede, sv.tipo_servicio, m.nom_medico, fecha
            FROM tb_citas AS c
            INNER JOIN tb_sedes AS sd ON(c.id_sede = sd.id_sede)
            INNER JOIN tb_servicio AS sv ON(c.id_servicio = sv.id_servicio)
            INNER JOIN tb_medicos AS m ON(c.id_medico = m.id_medico) ORDER BY id_cita";
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
    $pdf->Cell(25, 10, $row['nom_usu_cita'], 1, 0, 'C', 1);
    $pdf->Cell(25, 10, $row['cedu_usu_cita'], 1, 0, 'C', 1);
    $pdf->Cell(35, 10, $row['correo_cita'], 1, 0, 'C', 1);
    $pdf->Cell(25, 10, $row['nom_sede'], 1, 0, 'C', 1);
    $pdf->Cell(35, 10, $row['tipo_servicio'], 1, 0, 'C', 1);
    $pdf->Cell(25, 10, $row['nom_medico'], 1, 0, 'C', 1);
    $pdf->Cell(25, 10, $row['fecha'], 1, 1, 'C', 1);
    
}

$pdf->Output();
?>