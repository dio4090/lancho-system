<?php
  require_once('../config.php'); 

// Incluimos a classe PHPExcel
include  '../PHPExcel-1.8/Classes/PHPExcel.php';


// Instanciamos a classe
$objPHPExcel = new PHPExcel();

// Definimos o estilo da fonte
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

// Criamos as colunas
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Listagem de Produtos' )
            ->setCellValue('B1', "Nome " )
            ->setCellValue("C1", "Valor" )
            ->setCellValue("D1", "Fornecedor" );

// Podemos configurar diferentes larguras paras as colunas como padrão
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(90);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);

$sql = "SELECT * FROM produtos"; 
$dados = $PDO->query($sql);

// Também podemos escolher a posição exata aonde o dado será inserido (coluna, linha, dado);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 2, "".$dados['nome']."");
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 2, "".$dados['valor']."");
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 2, "".$dados['fornecedor']."");


// Exemplo inserindo uma segunda linha, note a diferença no segundo parâmetro
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 3, "Beltrano");
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 3, " da Silva Sauro");
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 3, "beltrando@exemplo.com.br");

// Podemos renomear o nome das planilha atual, lembrando que um único arquivo pode ter várias planilhas
$objPHPExcel->getActiveSheet()->setTitle('Credenciamento para o Evento');

// Cabeçalho do arquivo para ele baixar
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="dados_lancho_system.xls"');
header('Cache-Control: max-age=0');
// Se for o IE9, isso talvez seja necessário
header('Cache-Control: max-age=1');

// Acessamos o 'Writer' para poder salvar o arquivo
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

// Salva diretamente no output, poderíamos mudar arqui para um nome de arquivo em um diretório ,caso não quisessemos jogar na tela
$objWriter->save('php://output'); 

exit;

?> 