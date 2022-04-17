<?php
include '../FPDF/fpdf.php';//incluindo arquivo de pdf
include 'conexao_adm.php';//incluindo conecxao como banco

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
$pdf->Image('../../resources/img/imgnavbar.png, 1,1, -100');

//selecionando as tabelas que vao trazer os dados 
$sql = $pdo->prepare("SELECT * FROM cadastro_visitas,cadastro_coordenador,cadastro_adm");

//executando  
$sql->execute();

   //parametros do conteudo da tabela
    
   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Nome' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Cpf' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Telefone' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Senha' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo

   $pdf->SetFillColor(10,0,0);//colocando cor de fundo do campo
   $pdf->Cell(5,2, 'Funcao' ,1,0,'c', TRUE);//TRUE determina que a cor funcione no campo
 
   //conteudo da tabela
   foreach ($sql as $resultado) {

   //colocar os parametros da tabela 
    
   $pdf->Cell(5,2, $resultado['$nome'],1,0,'c');
 
   $pdf->Cell(5,2, $resultado['$cpf'],1,0,'c');
 
   $pdf->Cell(5,2, $resultado['$telefone'],1,0,'c');
 
   $pdf->Cell(5,2, $resultado['$senha'],1,0,'c');

   $pdf->Cell(5,2, $resultado['$funcao'],1,1,'c');
   
}

?>

