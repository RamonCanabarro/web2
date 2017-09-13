<?php 

session_start();

include_once 'Produto.php';

$oProduto = new Produto();

switch($_GET['acao']){
    case 'verificar-codigo';
    $oProduto->verificarCodigo($_GET['id_categoria']);    
        die;
	}

$mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.'; 

$_SESSION['mensagem'] = $mensagem;
$_SESSION['resultado'] = $resultado;

?>
<script>
	window.location.href= 'index.php';
</script>	
    