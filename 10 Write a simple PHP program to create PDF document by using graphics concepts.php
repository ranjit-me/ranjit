<?php
require('fpdf186/fpdf.php');
class PDF extends FPDF{
function Ellipse($x,$y,$rx,$ry,$style='D'){
$op=($style=='F')?'f':(($style=='FD'||$style=='DF')?'b':'S');
$lx=4/3*(M_SQRT2-1)*$rx;$ly=4/3*(M_SQRT2-1)*$ry;
$k=$this->k;$h=$this->h;$x*=$k;$y=($h-$y)*$k;$rx*=$k;$ry*=$k;
$this->_out(sprintf('%.2F %.2F m',($x+$rx),$y));
$this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c',($x+$rx),($y+$ly),($x+$lx),($y+$ry),$x,($y+$ry)));
$this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c',($x-$lx),($y+$ry),($x-$rx),($y+$ly),($x-$rx),$y));
$this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c',($x-$rx),($y-$ly),($x-$lx),($y-$ry),$x,($y-$ry)));
$this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c %s',($x+$lx),($y-$ry),($x+$rx),($y-$ly),($x+$rx),$y,$op));
}}
$pdf=new PDF();$pdf->AddPage();
$pdf->SetFont('Arial','B',16);$pdf->Cell(0,10,'PDF with New Shapes (FPDF Example)',0,1,'C');
$pdf->SetDrawColor(255,0,0);$pdf->Line(50,50,100,100);$pdf->Line(100,100,10,100);$pdf->Line(10,100,50,50);
$pdf->SetDrawColor(0,0,255);$pdf->Ellipse(150,70,30,15,'D');
$pdf->SetDrawColor(0,128,0);$pdf->SetFillColor(0,255,0);$pdf->Rect(20,120,60,30,'F');
$pdf->SetFont('Arial','',14);$pdf->Text(20,170,'This PDF shows a triangle, ellipse, and filled rectangle.');
$pdf->Output('I','new_shapes.pdf');
?>
