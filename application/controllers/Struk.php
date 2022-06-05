<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Struk extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
	function index()
	{
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'Laporan XCOFFEE',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No.',1,0,'C');
        $pdf->Cell(15,6,'id',1,0,'C');
        $pdf->Cell(35,6,'invoice',1,0,'C');
        $pdf->Cell(25,6,'Tanggal',1,0,'C');
        $pdf->Cell(30,6,'Pembeli',1,0,'C');
        $pdf->Cell(55,6,'Item',1,0,'C');
        $pdf->Cell(25,6,'price',1,0,'C');
        $pdf->Cell(30,6,'Total',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $order = $this->db->get('laporan')->result();
        $no=0;
        foreach ($order as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(15,6,$data->id,1,0);
            $pdf->Cell(35,6,$data->invoice,1,0);
            $pdf->Cell(25,6,$data->date,1,0);
            $pdf->Cell(30,6,$data->pembeli,1,0);
            $pdf->Cell(55,6,$data->name,1,0);
            $pdf->Cell(25,6,$data->price,1,0);
            $pdf->Cell(30,6,$data->total,1,1);
            
        }
        $pdf->Output();
	}
}
?>