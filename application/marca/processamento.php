<?php 

session_start();

include_once 'Marca.php';

$oMarca = new Marca();

switch($_GET['acao']){
	case 'salvar':
		if(empty($_POST['id_marca'])){
			$resultado = $oMarca->inserir($_POST);
		} else {
			$resultado = $oMarca->alterar($_POST);
		}
		break;
	case 'excluir':
		$resultado = $oMarca->excluir($_GET['id_marca']);
		break;
}

$mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.'; 

$_SESSION['mensagem'] = $mensagem;
$_SESSION['resultado'] = $resultado;

?>
<script>
	window.location.href= 'index.php';
</script>	
    