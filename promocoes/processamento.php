<?php 

include_once 'list4.php';

$oCadastro = new Cadastrar4();


switch(isset($_GET['acao'])? $_GET['acao'] : 'erro'){
	case 'salvar':
		if(empty($_POST['cadastro4'])) {
            $resultado = $oCadastro->inserir($_POST);
		} else {
		$resultado = $oCadastro->alterar($_POST);
	}
            break;
	case 'excluir':
		$resultado = $oCadastro->excluir($_GET['horario']);
		break;
}

  $mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.';

?>
<script>
  alert('<?php echo $mensagem; ?>');
 window.location.href= '../index/index.php';
</script>
