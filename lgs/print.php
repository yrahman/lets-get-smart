<?php
session_start();
 require 'config.php';
  require 'db/debug.php';
  require 'db/mysql2.php';
  require 'db/access_db.php';
  require "lib/util.php";
  require "lib/access.php";
  require "db/orm.php";
  require "db/schools_db.php";
  require "db/classes_db.php";
require "db/asg_db.php";
	require('fpdf.php');
	
	class PDF extends FPDF
	{
	// Load data
	function LoadData($file)
	{
		// Read file lines
		$lines = file($file);
		$data = array();
		foreach($lines as $line)
			$data[] = explode(';',trim($line));
		return $data;
	}

	// Simple table
	function BasicTable($header, $data,$border=null)
	{
		// Header
		if($border!=null){
			$border="0";
		}else{
			$border="1";
		}
		foreach($header as $col)
			$this->Cell(40,7,$col,$border);
		$this->Ln();
		// Data
		foreach($data as $row)
		{
			foreach($row as $col)
				$this->Cell(40,6,$col,$border);
			$this->Ln();
		}
	}
	function BasicTable2($header, $data,$border=null)
	{
		// Header
		if($border!=null){
			$border="0";
		}else{
			$border="1";
		}
		foreach($header as $col)
			$this->Cell(40,7,$col,$border);
		$this->Ln();
		// Data
		foreach($data as $row)
		{
			$z=0;
			foreach($row as $col){
				if($z==1){
				$this->Cell(40,6,$col,$border,0,"R");
				}else{
				$this->Cell(40,6,$col,$border);
				}
				$z++;
				}
			$this->Ln();
			
		}
	}

	// Better table
	function ImprovedTable($header, $data)
	{
		// Column widths
		$w = array(40, 35, 40, 45);
		// Header
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C');
		$this->Ln();
		// Data
		foreach($data as $row)
		{
			$this->Cell($w[0],6,$row[0],'LR');
			$this->Cell($w[1],6,$row[1],'LR');
			$this->Cell($w[2],6,$row[2],'LR',0,'R');
			$this->Cell($w[3],6,$row[3],'LR',0,'R');
			$this->Ln();
		}
		// Closing line
		$this->Cell(array_sum($w),0,'','T');
	}

	// Colored table
	function FancyTable($header, $data)
	{
		// Colors, line width and bold font
		$this->SetFillColor(150,150,150);
		$this->SetTextColor(255);
		$this->SetDrawColor(50,50,50);
		$this->SetLineWidth(.3);
		$this->SetFont('','B');
		// Header
		$w = array(15,70, 35, 40, 30);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = false;
		foreach($data as $row)
		{
			$this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
			$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
			$this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
			$this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
			$this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
			$this->Ln();
			$fill = !$fill;
		}
		// Closing line
		$this->Cell(array_sum($w),0,'','T');
	}
	}

$pdf = new PDF();
// Column headings
$header = array('No','Name','Status','Success','Total Point');
$headertitle = array("","","");
// Data loading
$a3s = xyz39zyx::xyz49zyx($_SESSION['pdf']);
// echo $_SESSION['pdf'];exit;
// print_r(xyz39zyx::xyz57zyx($a3s));exit;
$no =1;
while($a3=xyz39zyx::xyz57zyx($a3s)){
	$data[]= array($no,$a3['Name'],$a3['status_name'],$a3['is_success'],$a3['total_point']);
	$qk = clazz::get($a3['cls']);
	$rk =xyz39zyx::xyz49zyx($qk);
	$kelas = xyz39zyx::xyz57zyx($rk);
	$sk = school::get($a3['sch']);
	$rs = xyz39zyx::xyz49zyx($sk);
	$skola = xyz39zyx::xyz57zyx($rs);
	$no++;
}
// print_r($data);exit;
$datatitle = array(
	array("Schools",":",$skola['sch_name']),
	array("Class",":",$kelas['class']),
	array("Category",":",$_SESSION['cat_name']),
	array("Test",":",$_SESSION['test_name']),
	// array("Type",":",$_SESSION['quiz_type']),
	// array("Show results to user",":",$_SESSION['show_results']),
	// array("Results by",":",$_SESSION['a1ults_by']),
	array("Success point/percent",":",$_SESSION['pass_score']),
	array("Test time (in minutes)",":",$_SESSION['test_time'])
);
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->Cell(20,10,"Date : ".$_SESSION['added_date'],0,1,'L');
// $pdf->BasicTable($header,$data);
// $pdf->AddPage();
// $pdf->ImprovedTable($header,$data);
// $pdf->AddPage();
$pdf->BasicTable2($headertitle,$datatitle,"0");
$pdf->Ln(10);
$pdf->FancyTable($header,$data);
$pdf->Output(str_replace(" ","_",$_SESSION['test_name'])."-".str_replace(" ","_",$_SESSION['added_date']).".pdf",'D');


?>