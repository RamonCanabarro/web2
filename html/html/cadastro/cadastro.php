<?php
include_once 'list.php';
$oCadastro = new Cadastrar();
if (!empty($_GET['usuario'])) {
    $oCadastro->carregarPorId($_GET['usuario']);
}


include_once '../cabecalho.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

</head>
<body>
<link type="text/css" rel="stylesheet" href="../js/bootstrap/css/bootstrap.css"/>

<form action="processamento.php?acao=salvar" method="post" name="usuario" class=" col-md-12">
    <div class="panel panel-primary" aling="center">
        <div class="panel-heading" align="center">
            <h4>Cadastro</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab"
                                                              data-toggle="tab" aria-controls="home"
                                                              aria-expanded="true">Home</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb"
                                                        data-toggle="tab" aria-controls="profile" aria-expanded="false">Recinto</a>
                    </li>
                </ul>
                <div id="myTabContent2" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                        <div class="col-md-12">
                            <input type="hidden" name="id_curso" id="usuario"
                                   value="<?php echo $oCadastro->getIdUsuario(); ?>"/></div>

                            <div class="col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" placeholder="Nome" id="nome" name="nome" required
                                       class="form-control text-uppercase"
                                       value="<?php echo $oCadastro->getNome(); ?>"/>
                            </div>
                            <div class="col-md-6">
                                <label for="usuario">Usuário:</label>
                                <input type="text" placeholder="Usuário" id="usuario" name="usuario" required
                                       class="form-control"
                                       value="<?php echo $oCadastro->getIdUsuario(); ?>"/>
                            </div>

                            <div class="col-md-6">
                                <label for="senha">Senha:</label>
                                <input type="password" placeholder="Senha" id="senha" name="senha" required
                                       class="form-control text-uppercase"
                                       value="<?php echo $oCadastro->getSenha(); ?>"/>
                            </div>

                            <div class="col-md-6">
                                <label for="telefone">Telefone</label>
                                <input type="text" placeholder="(00) 0000-0000" id="telefone" name="telefone" required
                                       class="form-control" size="10" maxlength="9"
                                       value="<?php echo $oCadastro->getTelefone(); ?>"/>
                            </div>
                            <div class="col-md-6">
                                <label for="celular">Celular</label>
                                <input type="text" placeholder="(00) 0000-0000" id="celular" name="celular" required
                                       class="form-control" size="10" maxlength="10"
                                       value="<?php echo $oCadastro->getCelular(); ?>"/>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="control-label col-md-2">E-mail:</label>
                                <input type="email" placeholder="E-mail" id="email" name="email" required
                                       class="form-control text-lowercase"
                                       value="<?php echo $oCadastro->getEmail(); ?>"/>
                            </div>

                        </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                        <div class="col-md-12">
                            <input type="hidden" name="id_curso" id="usuario"
                                   value="<?php echo $oCadastro->getIdUsuario(); ?>"/></div>

                        <div class="col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" placeholder="Nome" id="nome" name="nome" required
                                   class="form-control text-uppercase"
                                   value="<?php echo $oCadastro->getNome(); ?>"/>
                        </div>
                        <div class="col-md-6">
                            <label for="usuario">Bairro:</label>
                            <input type="text" placeholder="Bairro" id="bairro" name="bairro" required
                                   class="form-control"
                                   value="<?php echo $oCadastro->getIdUsuario(); ?>"/>
                        </div>

                        <div class="col-md-6">
                            <label for="usuario">Cidade:</label>
                            <input type="text" placeholder="Cidade" id="cidade" name="cidade" required
                                   class="form-control"
                                   value="<?php echo $oCadastro->getIdUsuario(); ?>"/>
                        </div>

                    </div>
                </div>

            </div>

            <div class="panel-footer" align="center">
                <button type="submit" value="Enviar" class="btn btn-primary" href="">Salvar</button>
                <button type="reset" value="Cancelar" class="btn btn-primary">Cancelar</button>
            </div>

        </div>

</form>

<?php include_once '../rodape.php'; ?>

</body>
</html>
