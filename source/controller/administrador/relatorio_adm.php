<?php
include '../FPDF/fpdf.php';//incluindo arquivo de pdf

// Manual rapido
// 1 = quebrar linha
// 0 = para nao quebrar linha 
// 5 = widht em cm
// 2 = height

$pdf = new FPDF('p','cm','A4');//criando o pdf e passando os parametros deles
$pdf->AddPage();//criando a pagina
$pdf->SetFont('Arial','B',16);//colocando a fonte , negrito, tamamanho
$pdf->Output();
$pdf->SetTextColor(0,0, 128);//cor do texto

//colocando uma imagen e seus parametros
$pdf->SetY(12);
$pdf->Image('../../../resources/img/imgnavbar.png, 1,1, -100');

//selecionando as tabelas que vao trazer os dados 
$pdo = new PDO ('mysql:host=localhost;dbname=id18794868_ads5periodo','id18794868_root', 'ads5periodoGean&Viviane');

$sql = $pdo->prepare("SELECT * FROM `visitas'");

//executando  
$sql->execute();

   //parametros do conteudo da tabela
    
   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Usuario' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Setor' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Escola' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Q.alunos' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo
   
   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Conteudo ab' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo
   
   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'professor resp' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Data' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo
 
   //conteudo da tabela
   foreach ($sql as $resultado) {

   //colocar os parametros da tabela 
    
   $pdf->Cell(5,2, $resultado['usuarioVST'],1,0,'c');
 
   $pdf->Cell(5,2, $resultado['setorVST'],1,0,'c');
 
   $pdf->Cell(5,2, $resultado['escolaVST'],1,0,'c');
 
   $pdf->Cell(5,2, $resultado['alunosVST'],1,0,'c');

   $pdf->Cell(5,2, $resultado['conteudoVST'],1,0,'c');

   $pdf->Cell(5,2, $resultado['professorVST'],1,0,'c');

   $pdf->Cell(5,2, $resultado['dataVST'],1,1,'c');
   
}

?>

