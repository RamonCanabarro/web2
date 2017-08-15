<?php 

include_once 'list2.php';

$oCadastro = new Cadastro();

var_dump($_POST);
switch(isset($_GET['acao'])? $_GET['acao'] : 'erro'){
	case 'salvar':
        if(empty($_POST['id'])){
			$resultado = $oCadastro->inserir($_POST);
		} else {
		$resultado = $oCadastro->alterar($_POST);
        }
		break;
	case 'excluir':
		$resultado = $oCadastro->excluir($_GET['cadastro']);
		break;
}

  $mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.';

?>
 <script>
	alert('<?php echo $mensagem; ?>');
	window.location.href= '../index/index.php';
</script>
