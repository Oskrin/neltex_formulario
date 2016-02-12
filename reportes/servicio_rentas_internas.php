<?php
    require('../fpdf/fpdf.php');
    include '../data/conexion.php';
    include '../procesos/funciones.php';
    conectarse();    
    date_default_timezone_set('America/Guayaquil'); 
    session_start();

    class PDF extends FPDF {   
        var $widths;
        var $aligns;

        function SetWidths($w) {            
            $this->widths=$w;
        }       

        function Header() {             
            $this->AddFont('Amble-Regular','','Amble-Regular.php');
            $this->SetFont('Amble-Regular','',10);        

        }
        //function Footer() {            
        //    $this->SetY(-15);            
        //    $this->SetFont('Arial','I',8);            
            //$this->Cell(0,10,'Pag. '.$this->PageNo().'/{nb}',0,0,'C');
        //}               
    }
    $pdf = new PDF('P','mm','a4');
    $pdf->AddPage();
    $pdf->SetMargins(10,0,0,0);        
    $pdf->AliasNbPages();
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->AddFont('Amble-Regular','','Amble-Regular.php');
    $pdf->SetFont('Amble-Regular','',10);       
    
    $pdf->Rect(25, 25, 165, 80 , 'D');////3 INFO TRIBUTARIA
    $pdf->SetY(33);
    $pdf->SetX(85);
    $pdf->multiCell(180, 6, utf8_decode('SERVICIO RENTAS INTERNAS'),0 );//NOMBRE cliente 
    $pdf->Text(60, 45, utf8_decode('RUC: '));//ruc cliente
    $pdf->Text(42, 50, utf8_decode('RAZON SOCIAL: '));//ruc cliente
    $pdf->Text(48, 55, utf8_decode('IMPUESTOL: '));//ruc cliente
    $pdf->Text(40, 60, utf8_decode('PERIODO FISCAL: '));//ruc cliente


   
                                                     
    $pdf->Output();
?>