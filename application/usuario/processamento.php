<?php 

session_start();

include_once 'Usuario.php';

$oUsuario = new Usuario();

switch($_GET['acao']){
    case 'verificar-codigo';
        $origem = $FILES['foto']['tmp_name'];
        $destino = '../upload/usuario/teste.jpg';
        $oProduto->verificarCodigo($_GET['codigo']);
        die;
    case 'recuperar-modelo';
        include_once '../modelo/Modelo.php';
        $oModelo = new Modelo();
        $oModelo->recuperarPorMarca($_GET['id_marca']);
        die;

    case 'salvar':
        move_upload_file['foto']['tmp_name'], '../upload/teste.jpg';
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
    