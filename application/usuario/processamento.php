<?php 

include_once 'Usuario.php';

$usuario = new Usuario();

switch($_GET['acao']){
	case 'salvar':
		$arquivo = isset($_FILES['foto']) ? $_FILES['foto'] : FALSE;;

		for ($k = 0; $k < count($arquivo['name']); $k++) {
			$resultado = $destino = "upload/" . $arquivo['name'][$k];

			if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) ;
		}

		if(empty($_POST['id_usuario'])){
			$resultado = $usuario->inserir($_POST);
		} else {
			$resultado = $usuario->alterar($_POST);
		}

		break;
	case 'excluir':
		$resultado = $usuario->excluir($_GET['id_usuario']);
		break;
	case 'recupera_municipios';
		if(isset($_GET['id_uf'])){
			$usuario->recupera_municipios($_POST);
		}
		break;
}

if($resultado){
	$mensagem = 'Sucesso';
} else {
	$mensagem = 'Ocorreu um erro!';
}
?>

<script>
	alert('<?php echo $mensagem; ?>');
	window.location.href = 'index.php';
</script>
