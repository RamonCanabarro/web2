<?php

include_once 'list.php';
$oCadastro = new Reservas();
$cadastrar = $oCadastro->recuperarTodos();

include_once '../cabecalho.php';?>

<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Listagem</h1>
    <tr>
        <td>Ações</td>
        <td>Data</td>
        <td>Pessoas</td>
        <td>Crianças</td>
    </tr>
    <?php foreach ($cadastrar as $cadastros) { ?>
        <tr>
            <td>
                <a href="reservas.php?id_reservas=<?php echo $cadastros['id_reservas']; ?>"<span
                        class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="processamento.php?acao=excluir&id_reservas=<?php echo $cadastros['id_reservas']; ?>"><span
                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros['horario']; ?></td>
            <td><?php echo $cadastros['Qtd_Adult']; ?></td>
            <td><?php echo $cadastros['Qtd_Crian']; ?></td>


        </tr>
    <?php } ?>

    <div class="panel-footer" align="right">
        <a href="reservas.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</table>

<?php //include_once '../rodape.php';?>