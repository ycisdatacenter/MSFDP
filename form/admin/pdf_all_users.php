<?php
@ob_start();
session_start();
include("fpdf181/fpdf.php");
include("connect.php");

//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,'Hello World!');
//$pdf->Output();

class myPDF extends FPDF
{
	function headerr(){
	//$this->Image('logo.png',10,6);
	$this->SetFont('Arial','B',14);
	$this->cell(276,5,' Registration Detail',0,0,'C');
	$this->Ln();
	$this->SetFont('Times','',12);
	//$this->cell(276,10,'Student Registration Detail',0,0,'C');
	
	 $tdt = date("d.m.Y");
	 $tDate=date('l \t\h\e jS');
     //$this->Cell(0, 10, 'Date : '.$tDate, 0, false, 'C', 0, '', 0, false, 'T', 'M');
	$this->Cell(0, 10, 'Date : '.$tdt, 0, false, 'R');
	
	
	$this->Ln(20);
	}
	
	function footer(){
	$this->SetY(-15);
	$this->SetFont('Arial','',8);
	$this->cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}
	
	function headerTable(){	
	$this->SetFont('Arial','B',9);
	
	$this->cell(60,10,'Name',1,0,'L');	
	$this->cell(20,10,'Company',1,0,'L');
	$this->cell(25,10,'City',1,0,'L');
	$this->cell(25,10,'State',1,0,'L');
	$this->cell(45,10,'Country',1,0,'L');
	
	$this->cell(45,10,'Email Id',1,0,'L');
	$this->cell(20,10,'Mobile No',1,0,'L');
	//$this->cell(30,10,'Address',1,0,'L');
	$this->cell(50,10,'Abstract Category',1,0,'L');
	$this->cell(50,10,'Speech Title',1,0,'L');
	
	$this->Ln();
	}
	
	function viewTable()
	{
	$this->SetFont('Arial','',9);	
	
	//$stmt=$db->query('select * from users');
	//$query="SELECT * FROM `users` WHERE $coloum ='$value'";
	//while($data=$stmt->fetch(PDO::FETCH_OBJ)){
	
	//$coloum=$_SESSION['search'];
	//$value=$_SESSION['value'];
	
	$query="SELECT * FROM users";
	$run=mysql_query($query);
	if( mysql_num_rows($run )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
	else{
	
	while($row=mysql_fetch_array($run)){
		
	//$this->cell(15,10,$row['user_id'],1,0,'C');
	
	$this->cell(60,10,$row['title'].' '.$row['first_name'].' '.$row['last_name'],1,0,'L');
	
	$this->cell(20,10,$row['company'],1,0,'L');
	$this->cell(25,10,$row['city'],1,0,'L');
	$this->cell(25,10,$row['state'],1,0,'L');
	$this->cell(45,10,$row['country'],1,0,'L');
	$this->cell(45,10,$row['email'],1,0,'L');
	$this->cell(20,10,$row['mob'],1,0,'L');
	//$this->cell(30,10,$row['address'],1,0,'L');
	$this->cell(50,10,$row['abstract_category'],1,0,'L');
	$this->cell(50,10,$row['speech_title'],1,0,'L');
	
	$this->Ln();
	
	}
		}
	}
}
$pdf=new myPDF();
$pdf->AliasNbPages();
//$pdf->AddPage('L','A4',0);
$pdf->AddPage('L','Legal',0);
$pdf->headerr();
$pdf->headerTable();
//$pdf->viewTable($db);
$pdf->viewTable();

$pdf->Output();

?>