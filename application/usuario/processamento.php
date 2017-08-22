<?php 

session_start();

include_once 'Usuario.php';

$oUsuario = new Usuario();

switch($_GET['acao']){
	case 'salvar':
		if(empty($_POST['id_marca'])){
			$resultado = $oUsuario->inserir($_POST);
		} else {
			$resultado = $oUsuario->alterar($_POST);
		}
		break;
	case 'excluir':
		$resultado = $oUsuario->excluir($_GET['id_marca']);
		break;
}

$mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.'; 

$_SESSION['mensagem'] = $mensagem;
$_SESSION['resultado'] = $resultado;

?>
<script>
	window.location.href= 'index.php';
</script>	
    