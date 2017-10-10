<?php 
	include_once 'Usuario.php';
	
	$usuario = new Usuario();
	$usuarios = $usuario->recuperarTodos();
?>

<?php include_once '../cabecalho.php'; ?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Usuário</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <a href="formulario.php" class="btn btn-warning">Inserir</a>

                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <td>Ações</td>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>UF</td>
                                <td>Municipio</td>
                            </tr>
                            <?php foreach($usuarios as $dado) { ?>
                                <tr>
                                    <td>
                                        <a class="btn btn-danger" title="Excluir" href="processamento.php?acao=excluir&id_usuario=<?php echo $dado['id_usuario']; ?>">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>

                                        <a class="btn btn-success" title="Alterar" href="formulario.php?id_usuario=<?php echo $dado['id_usuario']; ?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                    <td><?php echo $dado['id_usuario']; ?></td>
                                    <td><?php echo $dado['nome']; ?></td>
                                    <td><?php echo $dado['uf']; ?></td>
                                    <td><?php echo $dado['municipio']; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once '../rodape.php'; ?>