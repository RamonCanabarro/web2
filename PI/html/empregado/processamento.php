<?php

include_once 'list.php';

$oCadastro = new Cadastrar1();

switch (isset($_GET['acao']) ? $_GET['acao'] : 'erro') {
    case 'salvar':
        if (empty($_POST['id_cargo'])) {
            $resultado = $oCadastro->inserir($_POST);
        } else {
            $resultado = $oCadastro->alterar($_POST);
        }
        break;
    case 'excluir':
        $resultado = $oCadastro->excluir($_GET['id_cargo']);
        break;
}

$mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.';

//echo ("<pre>");
//print_r($_POST);
//print_r($oCadastro->inserir($_POST));
//print_r($_GET);
//echo ("</pre>");

?>
<script>
    alert('<?php echo $mensagem; ?> ');
    window.location.href = '../empregado/index.php';
</script>
