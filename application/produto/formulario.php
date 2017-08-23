<?php
include_once '../cabecalho.php';




include_once '../marca/Marca.php';
include_once '../modelo/Modelo.php';


$oMarca = (new Marca())->recuperarTodos();
$oModelo = (new Modelo())->recuperarTodos();


include_once '../cabecalho.php';?>
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
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Design
                            <small>different form elements</small>
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
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Marca <span
                                        class="required">*</span>
                                </label>
                                <select class="col-md-6 col-sm-6 col-xs-12 chosen-select" multiple name="marca" id="marcar">
                                    <option value="#">Selecione</option>
                                    <?php foreach($aMarca as $marca){
                                        echo " <option value='{$marca['id_marca']}'>{$marca['nome']}</option>";
                                    }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo">Modelo</label>
                                <select class="col-md-6 col-sm-6 col-xs-12 chosen-select" multiple name="marca" id="marcar">
                                    <option value="#">Selecione</option>
                                    <?php foreach($aModelo as $modelo){
                                        echo " <option value='{$modelo['id_marca']}'>{$modelo['nome']}</option>";
                                    }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Código <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="codigo" name="codigo" class="date-picker form-control col-md-7 col-xs-12"
                                           required="required" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="preco">Preço <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="preco" name="preco" class="date-picker form-control col-md-7 col-xs-12"
                                           required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Styled</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2">
                                        <input type="text" value="#e01ab5" class="form-control" />
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                            </div>

                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include_once '../rodape.php' ?>

    <script>
    $(function () {
    $('#codigo').change(function (){
       $.ajax({
           url:'processamento.php?acao=verificar-codigo&codigo=' + $('#codigo').val(),
           success:function (retorno){
               alert(retorno);
           }
       });
    });
        $(".chosen-select").chosen({rtl: true});
    });
</script>
