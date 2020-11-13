<?php
require('fpdf.php');

class PDF extends FPDF
{
function Header()
{
    // Logo
    $this->Image('ipslogo.png',30,8,30);
    // Arial bold 15
    $this->SetFont('Arial','B',25);
	$this->SetTextColor(115, 226, 250);
    // Movernos a la derecha
    $this->Cell(80);
    // T�tulo
    $this->Cell(30,30,'IPS SALUD CECEP',0,0,'C');
    // Salto de l�nea
    $this->Ln(35);
	$this->SetFont('Arial','',18);
}

function Footer()
{
    // Posici�n: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(12, 148, 178);
    // N�mero de p�gina
    $this->Cell(0,10,'Page '.$this->PageNo().'--IPS CECEP',1,0,'C');
}

// Cargar los datos
function cargarDatos($file)
{
    // Leer las l�neas del fichero
    $archivo = file($file);
    $datos = array();
    foreach($archivo as $linea)
        $datos[] = explode(';',trim($linea));
    return $datos;
}

// Tabla Elegante
function TablaElegante($titulos, $datos)
{
    // Colores, ancho de l�nea y fuente en negrita
    $this->SetFillColor(71, 200, 229);
    $this->SetTextColor(255);
    $this->SetDrawColor(71, 200, 229);
    $this->SetLineWidth(.2);
    $this->SetFont('','B',14);
    // Cabecera de titulos
    $w = array(35,60, 60, 35);
    for($i=0;$i<count($titulos);$i++)
        $this->Cell($w[$i],7,$titulos[$i],1,0,'C',true);
    $this->Ln();
    // Restauraci�n de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('','',10);
    // Datos
    $fill = false;
    foreach($datos as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // L�nea de cierre
    $this->Cell(array_sum($w),0,'','T');
}
}


$pdf = new PDF();
// T�tulos de las columnas
$titulos = array('Pais', 'Capital', 'Superficie', 'Habitantes');
// Carga de datos
$datos = $pdf->cargarDatos('paises.txt');
$pdf->SetFont('Arial','',10);
$pdf->AddPage();
#$pdf->TablaMejorada($titulos,$datos);

#$pdf->TablaMejorada($titulos,$datos);

$pdf->TablaElegante($titulos,$datos);
$pdf->Output();
?> 