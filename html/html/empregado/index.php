<?php

include_once 'list.php';
$oCadastro = new Cadastrar1();
$cadastrar = $oCadastro->recuperarTodos();

include_once '../cabecalho.php';?>

<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Promoções</h1>
    <tr>
        <td>Ações</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Cargo</td>
    </tr>
    <?php foreach ($cadastrar as $cadastros) { ?>
        <tr>
            <td>
                <a href="empregado.php?id_empregado=<?php echo $cadastros['id_empregado']; ?>"<span
                        class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="processamento.php?acao=excluir&id_empregado=<?php echo $cadastros['id_empregado']; ?>"><span
                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros['nome']; ?></td>
            <td><?php echo $cadastros['telefone']; ?></td>
            <td><?php echo $cadastros['cargo_id_cargo']; ?></td>


        </tr>
    <?php } ?>

    <div class="panel-footer" align="right">
        <a href="empregado.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</table>

<?php //include_once '../rodape.php';?>