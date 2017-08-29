<?php 

include_once 'list.php';

$oCadastro = new Cadastrar();


switch(isset($_GET['acao'])? $_GET['acao'] : 'erro'){
	case 'salvar':
		if(empty($_POST['administrador'])) {
            $resultado = $oCadastro->inserir($_POST);
		} else {
		$resultado = $oCadastro->alterar($_POST);
	}
            break;
	case 'excluir':
		$resultado = $oCadastro->excluir($_GET['id_administrador']);
		break;
}

  $mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.';

echo ("<pre>");
    print_r($_POST);
    print_r($oCadastro->alterar($_POST));
    print_r($_GET);
echo ("</pre>");

?>
<script>
    alert('<?php echo $mensagem; ?>');
    window.location.href= 'index.php';
</script>
