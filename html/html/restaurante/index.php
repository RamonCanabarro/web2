<?php

include_once 'list.php';
$oCadastro = new Cadastrar();
$cadastrar = $oCadastro->recuperarTodos();

include_once '../cabecalho.php';?>

<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Listagem</h1>
    <tr>
        <td>Ações</td>
        <td>Nome</td>
        <td>Administrador</td>
    </tr>
    <?php foreach ($cadastrar as $cadastros) { ?>
        <tr>
            <td>
                <a href="restaurante.php?id=<?php echo $cadastros['id']; ?>"<span
                        class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="processamento.php?acao=excluir&id=<?php echo $cadastros['id']; ?>"><span
                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros['nome_restaurante']; ?></td>
            <td><?php echo $cadastros['administrador_id_administrador']; ?></td>

        </tr>
    <?php } ?>

    <div class="panel-footer" align="right">
        <a href="restaurante.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</table>

<?php //include_once '../rodape.php';?>