<?php
include_once '../conexao.php';
$conexao = new Conexao();

include_once 'Perfil.php';
$perfil = new Perfil();
$oPerfil = $perfil->recuperarTodos();

include_once 'uf.php';
$uf = new Uf();
$oUf = $uf->recuperarTodos();

include_once 'Municipio.php';
$municipio = new Municipio();
$oMunicipio = $municipio->recuperarTodos();

include_once 'Usuario.php';
$usuario = new Usuario();
$oUsuario = $usuario->recuperarTodos();
if (!empty($_GET['id_usuario'])) {
    $usuario->carregarPorId($_GET['id_usuario']);
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
                    <h2>Usuário</h2>
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
                        <input type="hidden" name="id_usuario" id="id_usuario"
                               value="<?php echo $usuario->getIdUsuario(); ?>"/>

                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" id="nome"
                                       value="<?php echo $usuario->getNome(); ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefone" class="col-sm-2 control-label">Telefone: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telefone" id="telefone"
                                       value="<?php echo $usuario->getTelefone(); ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="masculino" class="col-sm-2 control-label">Sexo: </label>
                            <div class="col-md-10">
                                <input type="radio" name="sexo" id="masculino" value="M"/> Masculino &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="sexo" id="feminino" value="F"/> Feminino
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email: </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email"
                                       value="<?php echo $usuario->getEmail(); ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="senha" class="col-sm-2 control-label">Senha: </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="senha" id="senha"
                                       value="<?php echo $usuario->getSenha(); ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="id_perfil" class="col-sm-2 control-label">Perfil: </label>
                            <div class="col-sm-10">
                                <select name="id_perfil" id="id_perfil" class="form-control chosen">
                                    <?php foreach ($oPerfil as $perfis) { ?>
                                        <option
                                            value="<?php echo $perfis['id_perfil']; ?>"><?php echo $perfis['nome'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_uf" class="col-sm-2 control-label">Uf: </label>
                            <div class="col-sm-10">
                                <select name="uf" id="uf" class="form-control chosen">
                                    <?php foreach ($oUf as $ufs) { ?>
                                        <option name="uf1"
                                                value="<?php echo $ufs['id_uf'] ?>"><?php echo $ufs['nome'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_municipio" class="col-sm-2 control-label">Municipio: </label>
                            <div class="col-sm-10">
                                <select name="id_municipio" id="id_municipio" class="form-control">
                                    <?php foreach ($oMunicipio as $municipios) { ?>
                                        <option name="uf2"
                                                value="<?php echo $municipios['id_municipio'] ?>"><?php echo $municipios['nome'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Imagem <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                            <input id="foto" name="foto[]" multiple="multiple" class=" form-upload col-md-7 col-xs-12"
                                   required="required" type="file">
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="index.php" class="btn btn-danger">Voltar</a>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once '../rodape.php'; ?>

<script>
    $('#uf').change(function () {
        $.ajax({
            dataType: "json",
            url: 'processamento.php?acao=recupera_municipios&id_uf='+$('#id_uf').val(),
            data: '',
            success: (function (data) {
                console.log(data),
                $('#id_municipio').load(data)

            })
        });

    });
</script>