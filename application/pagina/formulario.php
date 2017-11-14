<?php
include_once '../conexao.php';
$conexao = new Conexao();

include_once 'Permissao.php';
$permissao = new Permissao();
$oPermissao = $permissao->recuperarTodos();

include_once 'Perfil.php';
$perfil = new Perfil();
$oPerfil = $perfil->recuperarTodos();


include_once 'Pagina.php';
$pagina = new Pagina();
$oPagina = $pagina->recuperarTodos();

if (!empty($_GET['id_pagina'])) {
    $pagina->carregarPorId($_GET['id_pagina']);
}
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
                    <h2>Formulario</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form action="processamento.php?acao=salvar" method="post" data-parsley-validate
                          enctype="multipart/form-data" class="form-horizontal form-label-left">
                        <input type="hidden" name="id_pagina" id="id_pagina"
                               value="<?php echo $oPagina->getIdPagina(); ?>"/>

                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" id="nome"
                                       value="<?php echo $oPagina->getNome(); ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="perfil" class="col-sm-2 control-label">Perfil com acesso: </label>
                            <div class="col-sm-10">
                                <?php foreach($aPerfil as $perfis){?>
                                <input type="checkbox" class="form-control" name="id_perfil" id="id_perfil"
                                       value="<?php echo "{$perfis['id_perfil']}";?>">
                               <?php }?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Página pública</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="publica" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary"
                                           data-toggle-passive-class="btn-default">
                                        <input type="radio" name="publica" value="1"> &nbsp; Sim &nbsp;
                                    </label>
                                    <label class="btn btn-primary" data-toggle-class="btn-primary"
                                           data-toggle-passive-class="btn-default">
                                        <input type="radio" name="publica" value="0"> Não
                                    </label>
                                </div>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../rodape.php'; ?>