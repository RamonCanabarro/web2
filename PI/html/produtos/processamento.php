<?php

include_once 'list.php';

$oCadastro = new Produtos();

$resultado = false;
switch (isset($_GET['acao']) ? $_GET['acao'] : 'erro') {
    case 'verificar-codigo':
        $oCadastro->verificarCodigo($_GET['codigo']);
        die;

    case 'salvar':
        if (isset($_FILES['foto'])) {

            date_default_timezone_set("Brazil/East");

            $id_produtos = $_POST["id_produtos"];

            $nomeArquivo = date('Ymd') . '_' . $id_produtos . '_' . $_FILES['foto']['name'][0];

            $origem = $_FILES['foto']['tmp_name'][0];
            echo "<pre>";
            var_dump($_FILES);
            echo '<br>';
            $destino = '../upload/produto/' . $nomeArquivo;
//            echo __DIR__;
            echo $nomeArquivo;

            move_uploaded_file($origem, $destino);
        }

        if (empty($_POST['id_produtos'])) {
            $resultado = $oCadastro->inserir($_POST, $nomeArquivo);
        } else {
            $resultado = $oCadastro->alterar($_POST);
        }
        break;
    case 'excluir':
        $resultado = $oCadastro->excluir($_GET['id_produtos']);
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
    alert('<?php echo $mensagem; ?>');
     window.location.href= 'index.php';
</script>
