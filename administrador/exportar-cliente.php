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
            ->setCellValue('A1', 'Listagem de clientes' )
            ->setCellValue('B1', "Nome " )
            ->setCellValue("C1", "Email" )
            ->setCellValue("D1", "Endereço" )
            ->setCellValue("E1", "CPF" )
            ->setCellValue("F1", "Nascimento" );

// Podemos configurar diferentes larguras paras as colunas como padrão
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(40);

$sql=("SELECT count(*) as total from clientes");
$sql = $PDO->query($sql);

foreach ($sql-> fetchAll() as $clientes) { 
	$z = $clientes['total'];
}



$sql = "SELECT * FROM clientes"; 
$sql = $PDO->query($sql);

$i = 0;
$j = 1;
$z += 1;
$x = 1;
	
	while($x < $z) {
		$z -= 1;
		foreach ($sql-> fetchAll() as $clientes) { 
		$j += 1;
			
				// Também podemos escolher a posição exata aonde o dado será inserido (coluna, linha, dado);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $j, $clientes['nome']);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $j, $clientes['telefone']);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $j, $clientes['endereco']);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $j, $clientes['cpf']);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $j, $clientes['dataNasc']);
			
		}
	}



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