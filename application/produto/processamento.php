<?php 

session_start();

include_once 'Produto.php';

$oProduto = new Produto();

switch($_GET['acao']){
    case 'verificar-codigo';
        $origem = $FILES_['foto']['tmp_name'];
        $destino = '../upload/produtos/teste.jpg';
    $oProduto->verificarCodigo($_GET['codigo']);    
        die;
		case 'recuperar-modelos';
		include_once '..modelo/Modelo.php';
		$oModelo = new Modelo();
		$oModelo->recuperarPorMarca($_GET['id_marca']);
		die;
        
	case 'salvar':
        move_upload_file['foto']['tmp_name'], '../upload/produtos/teste.jpg';
		if(empty($_POST['id_Produto'])){
			$resultado = $oProduto->inserir($_POST);
		} else {
			$resultado = $oProduto->alterar($_POST);
		}
		break;
	case 'excluir':
		$resultado = $oProduto->excluir($_GET['id_Produto']);
		break;
}

$mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.'; 

$_SESSION['mensagem'] = $mensagem;
$_SESSION['resultado'] = $resultado;

?>
<script>
	window.location.href= 'index.php';
</script>	
    