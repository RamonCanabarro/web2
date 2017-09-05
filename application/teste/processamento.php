<?php
include_once '../conexao.php';

switch ($_GET['acao']) {
    case 'imagem';
        $arquivo = isset($_FILES['foto']) ? $_FILES['foto'] : FALSE;;
//        move_uploaded_file($_FILES['foto']['tmp_name'], $destino . $Novo_nome);

        for ($k = 0; $k < count($arquivo['name']); $k++) {
            $resultado = $destino = "upload/" . $arquivo['name'][$k];

            if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) ;
        }
}

$mensagem = $resultado ? 'Operação realizada com sucesso.' : 'Ocorreu um erro.';
?>
<script>
    alert('<?php echo $mensagem; ?>');
    window.location.href = 'teste.php';
</script>
