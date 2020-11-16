<?php
	require 'fpdf.php';
	
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
	}
?>