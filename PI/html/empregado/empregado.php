<?php
include_once 'list.php';
$oCadastro = new Cadastrar1();
if (!empty($_GET['id_empregado'])) {
    $oCadastro->carregarPorId($_GET['id_empregado']);
}
include_once '../cabecalho.php';

include_once '../administrador/list.php';

include_once '../cargo/list1.php';

$oAdministrador = (new Cadastrar())->recuperarTodos();

$oCargo = (new Cargo())->recuperarTodos();
?>
<form class=" col-md-10" action="processamento.php?acao=salvar" method="post" name="id_empregado">
    <div class="panel panel-primary" aling="center">
        <div class="panel-heading" align="center">
            <h4>Cadastro</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_empregado" id="id_empregado"
                       value="<?php echo $oCadastro->getIdEmpregado(); ?>"/></div>

            <div class="col-md-6">
                <label for="nome">Nome</label>
                <input type="text" placeholder="Nome" id="nome" name="nome" required
                       class="form-control text-uppercase"
                       value="<?php echo $oCadastro->getNome(); ?>"/>
            </div>

            <div class="col-md-6">
                <label for="cpf">CPF:</label>
                <input type="text" placeholder="CPF" id="cpf" name="cpf" required
                       class="form-control"
                       value="<?php echo $oCadastro->getCpf(); ?>"/>
            </div>

            <div class="col-md-6">
                <label for="telefone">Telefone</label>
                <input type="text" placeholder="(00) 0000-0000" id="telefone" name="telefone" required
                       class="form-control" size="10" maxlength="9"
                       value="<?php echo $oCadastro->getTelefone(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="celular" class="control-label col-md-2">Celular:</label>
                <input type="text" placeholder="(99)9999-9999" id="celular" name="celular" required
                       class="form-control" size="10" maxlength="9""
                value="<?php echo $oCadastro->getCelular(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="cargo_id_cargo" class="control-label col-md-2">Cargo:</label>
                <select data-placeholder="Cargo..." name="cargo_id_cargo" id="cargo_id_cargo"
                        class="col-md-6 chosen-select ">
                    <?php foreach ($oCargo as $cargo) { ?>
                        <option value="<?php echo $cargo["id_cargo"]; ?>"><?php echo $cargo['cargo'] ?></option>;
                    <?PHP } ?>
                </select>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true">
                </button>

            </div>
            <div class="col-md-6">
                <label for="cep" class="control-label col-md-2">Cep:</label>
                <input type="text" id="cep" name="cep" required
                       class="form-control" size="10" maxlength="9""
                value="<?php echo $oCadastro->getCep(); ?>"/>
            </div>            <div class="col-md-6">
                <label for="rua" class="control-label col-md-2">Rua:</label>
                <input type="text" placeholder="" id="rua" name="rua" required
                       class="form-control" size="10" maxlength="9""
                value="<?php echo $oCadastro->getRua(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="bairro" class="control-label col-md-2">Bairro:</label>
                <input type="text" placeholder="" id="bairro" name="bairro" required
                       class="form-control" size="10" maxlength="9""
                value="<?php echo $oCadastro->getBairro(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="cidade" class="control-label col-md-2">Cidade:</label>
                <input type="text" placeholder="" id="cidade" name="cidade" required
                       class="form-control" size="10" maxlength="9""
                value="<?php echo $oCadastro->getcidade(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="estado" class="control-label col-md-2">Estado:</label>
                <input type="text" placeholder="" id="uf" name="uf" required
                       class="form-control" size="10" maxlength="9""
                value="<?php echo $oCadastro->getCidade(); ?>"/>
            </div>
            <div class="col-md-6">
                <div class="col-md-3"><label for="fk_administrador" class="control-label col-md-2">Administrador:</label></div>
                <select data-placeholder="Administrador..." name="fk_administrador" id="fk_administrador"
                        class="col-md-6 chosen-select ">
                    <?php foreach ($oAdministrador as $administrador) { ?>
                        <option value="<?php echo $administrador["id_administrador"]; ?>"><?php echo $administrador['adm'] ?></option>;
                    <?PHP } ?>
                </select>
            </div>
        </div>

        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
            <a href="index.php" value="Cancelar" class="btn btn-success">Cancelar</a>
        </div>
        <?php include_once '../rodape.php'; ?>
    </div>
    </div>
</form>
<html>
<head>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cargo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    include_once '../cargo/list1.php';
                    $oCadastro = new Cargo();
                    if (!empty($_GET['id_cargo'])) {
                        $oCadastro->carregarPorId($_GET['id_cargo']);
                    }
                    ?>
                    <form class=" col-md-10" action="../cargo/processamento.php?acao=salvar" method="post"
                          name="id_cargo">
                        <div class="panel-body form-horizontal">
                            <div class="col-md-12">
                                <input type="hidden" name="id_cargo" id="id_cargo"
                                       value="<?php echo $oCadastro->getIdCargo(); ?>"/></div>

                            <div class="col-md-6">
                                <label for="cargo">Cargo</label>
                                <input type="text" placeholder="Nome" id="cargo" name="cargo" required
                                       class="form-control"
                                       value="<?php echo $oCadastro->getCargo(); ?>"/>
                            </div>

                            <div class="col-md-6">
                                <label for="salario">Salario:</label>
                                <input type="text" placeholder="" id="salario" name="salario" required
                                       class="form-control"
                                       value="<?php echo $oCadastro->getSalario(); ?>"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script
        $('#myModal').on('shown.bs.modal', function () {
$('#myInput').focus()
})
</script>