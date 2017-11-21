<?php

include_once 'list.php';
$oCadastro = new Pedidos();
$cadastrar = $oCadastro->recuperarTodos();

include_once '../cabecalho.php';?>

<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Listagem</h1>
    <tr>
        <td>Ações</td>
        <td>Senha</td>
        <td>Nome</td>
        <td>Preço</td>

    </tr>
    <?php foreach ($cadastrar as $cadastros) { ?>
        <tr>
            <td>
                <a href="pedidos.php?id_pedidos=<?php echo $cadastros['id_pedidos']; ?>"<span
                        class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="processamento.php?acao=excluir&id_pedidos=<?php echo $cadastros['id_pedidos']; ?>"><span
                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros['id_pedidos']; ?></td>
            <td><?php echo $cadastros['nome']; ?></td>
            <td><?php echo $cadastros['preco']; ?></td>

        </tr>
    <?php } ?>

    <div class="panel-footer" align="right">
        <a href="pedidos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</table>

<?php //include_once '../rodape.php';?>