<?php include_once '../cabecalho.php';
include_once '../conexao.php';
$conexao = new Conexao();

include_once 'Modelo.php';
$aModelo = new Modelo();
$oModelo = $aModelo->recuperarTodos();

include_once 'Marca.php';
$aMarca = new Marca();
$oMarca = $aMarca->recuperarTodos();

include_once 'Tipo.php';
$aTipo = new Tipo();
$oTipo = $aTipo->recuperarTodos();

include_once 'Categoria.php';
$aCategoria = new Categoria();
$oCategoria = $aCategoria->recuperarTodos();

include_once 'Tipo_categoria.php';
$aTipo_categoria = new Tipo_categoria();
$oTipo_categoria = $aTipo_categoria->recuperarTodos();
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
                                 <select data-placeholder="Cargo..." name="cargo_id_cargo" id="cargo_id_cargo"
                        class="col-md-6 chosen-select ">
                    <?php foreach ($oMarca as $marca) { ?>
                        <option value="<?php echo $marca["id_marca"]; ?>"><?php echo $marca['nome'] ?></option>;
                    <?PHP } ?>
                </select>
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca</th>
                                </tr>
                                 </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <?php foreach ($oMarca as $marca) {
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
                <select data-placeholder="Cargo..." name="cargo_id_cargo" id="cargo_id_cargo"
                        class="col-md-6 chosen-select ">
                    <?php foreach ($oModelo as $modelo) { ?>
                        <option value="<?php echo $modelo["id_modelo"]; ?>"><?php echo $modelo['nome'] ?></option>;
                    <?PHP } ?>
                </select>
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Tipo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <?php foreach ($oModelo as $modelo) {
                                     ?>
                                <tr>
                                   <td><?php echo $modelo['id_modelo']; ?></td>
                                    <td><?php echo $modelo['nome']; ?></td>
                                    <td><?php echo $modelo['marca']; ?></td>
                                    <td><?php echo $modelo['tipo']; ?></td>
                                </tr>
                                <?php } ?>
                                </tr>
                                </tbody>
                             </table>
							   <div class="x_title">
                                <h2>Tipo
                                    <small>Tipo</small>
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
                                            <select class="col-md-6 chosen-select ">
                    <?php foreach ($oTipo as $tipo) { ?>
                        <option value="<?php echo $tipo["id_tipo"]; ?>"><?php echo $tipo['nome'] ?></option>;
                    <?PHP } ?>
                </select>
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <?php foreach ($oTipo as $tipo) {
                                    ; ?>
                                <tr>
                                    <td><?php echo $tipo['id_tipo']; ?></td>
                                    <td><?php echo $tipo['nome']; ?></td>
                                </tr>
                                <?php } ?>
                                </tr>
                                </tbody>
                             </table>
                        <div class="x_title">
                                <h2>Categoria
                                    <small>Categoria</small>
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
                                          <select data-placeholder="Cargo..." name="cargo_id_cargo" id="cargo_id_cargo"
                        class="col-md-6 chosen-select ">
                    <?php foreach ($oCategoria as $categoria) { ?>
                        <option value="<?php echo $categoria["id_marca"]; ?>"><?php echo $categoria['nome'] ?></option>;
                    <?PHP } ?>
                </select> 
                                <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Categoria</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <?php foreach ($oCategoria as $categoria) {
                                    ; ?>
                                <tr>
                                    <td><?php echo $categoria['id_categoria']; ?></td>
                                    <td><?php echo $categoria['nome']; ?></td>
                                </tr>
                                <?php } ?>
                                </tr>
                                </tbody>
                             </table>
               <div class="x_title">
                                <h2>Tipo_categoria
                                    <small>Tipo_categoria</small>
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
                                          <select data-placeholder="Cargo..." name="cargo_id_cargo" id="cargo_id_cargo"
                        class="col-md-6 chosen-select ">
                    <?php foreach ($oTipo_categoria as $tipo_categoria) { ?>
                        <option value="<?php echo $tipo_categoria["id_tipo_categoria"]; ?>"><?php echo $tipo_categoria['categoria'] ?></option>;
                    <?PHP } ?>
                </select> 
                                <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Categoria</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <?php foreach ($oTipo_categoria as $tipo_categoria) {
                                    ; ?>
                                <tr>
                                    <td><?php echo $tipo_categoria['id_tipo_categoria']; ?></td>
                                    <td><?php echo $tipo_categoria['tipo']; ?></td>
                                    <td><?php echo $tipo_categoria['categoria']; ?></td>
                                </tr>
                                <?php } ?>
                                </tr>
                                </tbody>
                             </table>

  <div class="x_title">
                                <h2>Tipo
                                    <small>Tipo</small>
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
                                          <select data-placeholder="Cargo..." name="id_tipo" id="id_tipo"
                        class="col-md-6 chosen-select ">
                   <?php foreach ($oTipo_categoria as $tipo_categoria) { ?>
                        <option value="<?php echo $tipo_categoria["id_tipo_categoria"]; ?>"><?php echo $tipo_categoria['tipo'] ?></option>;
                </select> 
                <select data-placeholder="Cargo..." name="id_categoria" id="id_tipo" class="col-md-6 chosen-select ">
                   <?php foreach ($oTipo_categoria as $tipo_categoria) { ?>
                        <option value="<?php echo $tipo_categoria["id_tipo_categoria"]; ?>"><?php echo $tipo_categoria['categoria'] ?></option>;
                </select>
                               
                                </tr>
</tbody></table>
                       </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../rodape.php'; ?>

<script>
$(function() {
    $("#tipo").bind("change", function() {
        $.ajax({
            type: "GET", 
            url: "tipo_categoria",
            data: "tid="+$("#tipo").val(),
            success: function(html) {
                $("#categoria").html(html);
            }
        });
    });
});
    </script>