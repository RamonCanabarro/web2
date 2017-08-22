<?php include_once '../cabecalho.php';
include_once '../conexao.php';
$conexao = new Conexao();


$sqli = "select * from modelo";
$sql = "select * from marca";


$aMarca = $conexao->recuperarTodos($sql);
$aModelo = $conexao->recuperarTodos($sqli);
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>!!!</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Procura por...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Pesquisar</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="x_title">
                                <h2>Marcas
                                    <small>Marcas</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <table class="table table-striped" id="tabela">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca</th>
                                </tr>
                                <tr>
                                    <th><input type="text" class="form-control" id="txtColuna1"/></th>
                                    <th><input type="text" class="form-control" id="txtColuna2"/></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <?php foreach ($aMarca as $marca) {
                                    ; ?>
                                <tr class="blocos">
                                    <td><?php echo $marca['id_marca']; ?></td>
                                    <td><?php echo $marca['nome']; ?></td>
                                </tr>
                                <?php } ?>
                                </tr>
                                </tbody>
                            </table>

                            <div class="x_title">
                                <h2>Modelo
                                    <small>Modelo</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <table class="table table-striped" id="">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Modelo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <?php foreach ($aModelo as $modelo) {
                                    ; ?>
                                <tr>
                                    <td><?php echo $modelo['id_modelo']; ?></td>
                                    <td><?php echo $modelo['nome']; ?></td>
                                </tr>
                                <?php } ?>
                                </tr>
                                </tbody>
                                <ul class="pager">
                                    <li><a onClick="history.go(-1)">Voltar</a></li>
                                    <li><a onCLick="history.forward()">Proximo</a></li>
                                    <li><a onClick="history.go(0)">Avançar</a></li>
                                </ul>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../rodape2.php'; ?>
        <script>
            $(function () {
                $("#tabela input").keyup(function () {
                    var index = $(this).parent().index();
                    var nth = "#tabela td:nth-child(" + (index + 1).toString() + ")";
                    var valor = $(this).val().toUpperCase();
                    $("#tabela tbody tr").show();
                    $(nth).each(function () {
                        if ($(this).text().toUpperCase().indexOf(valor) < 0) {
                            $(this).parent().hide();
                        }
                    });
                });

                $("#tabela input").blur(function () {
                    $(this).val("");
                });
            });
        </script>