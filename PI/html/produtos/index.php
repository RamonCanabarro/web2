<?php

include_once 'list.php';
$oCadastro = new Produtos();
$cadastrar = $oCadastro->recuperarTodos();

include_once '../cabecalho.php';?>

<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Listagem</h1>
    <tr>
        <td>Ações</td>
        <td>Produto</td>
        <td>Quantidade</td>
        <td>Preço</td>
        <td>Observações</td>
        <td>Administrador</td>

    </tr>
    <?php foreach ($cadastrar as $cadastros) { ?>
        <tr>
            <td>
                <a href="produtos.php?id_produtos=<?php echo $cadastros['id_produtos']; ?>"<span
                        class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="processamento.php?acao=excluir&id_produtos=<?php echo $cadastros['id_produtos']; ?>"><span
                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros['nome']; ?></td>
            <td><?php echo $cadastros['quantidade']; ?></td>
            <td><?php echo $cadastros['preco']; ?></td>
            <td><?php echo $cadastros['observacoes']; ?></td>
            <td><?php echo $cadastros['adm']; ?></td>

        </tr>
    <?php } ?>

    <div class="panel-footer" align="right">
        <a href="produtos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</table>

<?php include_once '../rodape.php';?>