<?php
define('FPDF_FONTPATH', 'font/');
require('../fpdf/fpdf.php');
include '../conexao.php';

// exibe todos os registros $sql="SELECT * FROM users ";
//selecionando as tabelas
$sql=("SELECT * FROM `visitas`");
$busca = mysqli_query($conexao, $sql);

$pdf = new FPDF('L');
$pdf->AddPage();

$pdf->SetTextColor(0,0, 128);//cor do texto

//imagem

$pdf->Image('../../../resources/img/pdfimg.png',15,10,20,24,'PNG');

//cabeçalho
$pdf->SetFont('Arial','B',12);
$pdf->Cell(140,10,('Relatorio do coordenador'),0,0,"C");//titulo

$pdf->ln(15); // espaçamento entra linhas de 15 mm

//titulo da tabela
$pdf->SetFont('Arial','B',16);//tamanho do titulo
$pdf->Cell(140,10,('Visitas'),0,0,"C");//titulo

$pdf->ln(15); // espaçamento entra linhas de 15 mm

//parametros da tabela 

$pdf->SetFont('Arial','B',12);//tamanho do resto da tabela

$pdf->Cell(40, 7, 'Usuario' ,1,0,'c');

$pdf->Cell(40, 7, 'Setor' ,1,0,'c');

$pdf->Cell(40, 7, 'Escola' ,1,0,'c');

$pdf->Cell(40, 7, 'Q.alunos' ,1,0,'c');

$pdf->Cell(40, 7, 'Conteudo',1,0,'c');

$pdf->Cell(40, 7, 'Professor - Resp',1,0,'c');

$pdf->Cell(45, 7, 'Data' ,1,1,'c');

//$pdf->ln(); //nenhum espaçamentos entre linhas

//pegando os dados do banco
while ($resultado = mysqli_fetch_array($busca)) {

   $pdf->Cell(40, 7, $resultado['usuarioVST'],1,0,'c');
 
   $pdf->Cell(40, 7, $resultado['setorVST'],1,0,'c');
 
   $pdf->Cell(40, 7, $resultado['escolaVST'],1,0,'c');

   $pdf->Cell(40, 7, $resultado['alunosVST'],1,0,'c');

   $pdf->Cell(40, 7, $resultado['conteudoVST'],1,0,'c');

   $pdf->Cell(40, 7, $resultado['professorVST'],1,0,'c');

   $pdf->Cell(45, 7, $resultado['dataVST'],1,1,'c');

   //$pdf->Ln();//pular par linha de baixo
    
}
$pdf->Output();
?>