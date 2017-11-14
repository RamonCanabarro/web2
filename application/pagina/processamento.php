<?php 

session_start();

include_once 'Pagina.php';

$oPagina = new Pagina();

switch($_GET['acao']){
	case 'salvar':
		if(empty($_POST['id_pagina'])){
			$resultado = $oPagina->inserir($_POST);
		} else {
			$resultado = $oPagina->alterar($_POST);
		}
		break;
	case 'excluir':
		$resultado = $oPagina->excluir($_GET['id_pagina']);
		break;
}

$mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.'; 

$_SESSION['mensagem'] = $mensagem;
$_SESSION['resultado'] = $resultado;

?>
<script>
	window.location.href= 'formulario.php';
</script>	
    