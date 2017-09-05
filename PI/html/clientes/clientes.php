<?php
include_once 'list.php';
$oCadastro = new Cadastrar2();
if (!empty($_GET['id_cliente'])) {
    $oCadastro->carregarPorId($_GET['id_cliente']);
}
include_once '../empregado/list.php';

$oEmpregado = (new Cadastrar1())->recuperarTodos();

include_once '../cabecalho.php';
?>
<form class=" col-md-10" action="processamento.php?acao=salvar" method="post" name="id_cliente">
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body form-horizontal">
            <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab"
                                                                  data-toggle="tab" aria-expanded="true">Cliente</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab"
                                                            data-toggle="tab" aria-expanded="false">Endereco</a>
                        </li>
                    </ul>
                    <div class="col-md-12">
                        <input type="hidden" name="id_cliente" id="id_cliente"
                               value="<?php echo $oCadastro->getIdCliente(); ?>"/></div>
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                         aria-labelledby="home-tab">
                        <div class="col-md-6">
                            <label for="name">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control" required
                                   value="<?php echo $oCadastro->getNome(); ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="cpf">CPF:</label>
                            <input type="text" id="cpf" name="cpf" class="form-control" required
                                   value="<?php echo $oCadastro->getCpf(); ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="telefone">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" class="form-control" required
                                   value="<?php echo $oCadastro->getTelefone(); ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="celular">Celular:</label>
                            <input type="text" id="celular" name="celular" class="form-control" required
                                   value="<?php echo $oCadastro->getCelular(); ?>">
                        </div>

                        <div class="col-md-6">
                            <label for="fk_empregado" class="control-label col-md-2">Administrador:</label>
                            <select data-placeholder="Empregado..." name="fk_empregado" id="fk_empregado" class="col-md-6 chosen-select ">
                                <?php foreach ($oEmpregado as $empregado) { ?>
                                    <option value="<?php echo $empregado["id_empregado"]; ?>"><?php echo $empregado['nome']?></option>;
                                <?PHP } ?>
                            </select>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <div class="col-md-6">
                            <label for="cep">Cep:</label>
                            <input type="text" id="cep" name="cep" class="form-control" required
                                   value="<?php echo $oCadastro->getCep(); ?>">
                        </div>
                    <div class="col-md-6">
                            <label for="rua">Rua:</label>
                            <input type="text" id="rua" name="rua" class="form-control" required
                                   value="<?php echo $oCadastro->getRua(); ?>">
                        </div>
                                            <div class="col-md-6">
                            <label for="bairro">bairro:</label>
                            <input type="text" id="bairro" name="bairro" class="form-control" required
                                   value="<?php echo $oCadastro->getBairro(); ?>">
                        </div>
                                            <div class="col-md-6">
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" class="form-control" required
                                   value="<?php echo $oCadastro->getCidade(); ?>">
                        </div>
                                            <div class="col-md-6">
                            <label for="uf">UF:</label>
                            <input type="text" id="uf" name="uf" class="form-control" required
                                   value="<?php echo $oCadastro->getUF(); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
        <?php include_once '../rodape.php'; ?>
    </div>
</form>
