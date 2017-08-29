<?php
include_once 'list.php';
$oCadastro = new Cadastrar1();
if (!empty($_GET['id_empregado'])) {
    $oCadastro->carregarPorId($_GET['id_empregado']);
}
include_once '../cabecalho.php';

include_once '../administrador/list.php';

$oAdministrador = (new Cadastrar())->recuperarTodos();
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
                <input type="text" placeholder="" id="celular" name="celular" required
                       class="form-control" size="10" maxlength="9""
                       value="<?php echo $oCadastro->getCelular(); ?>"/>
            </div>
<!--            <div class="col-md-6">-->
<!--                <label for="endereco" class="control-label col-md-2">Endereco:</label>-->
<!--                <input type="text" placeholder="" id="endereco" name="endereco" required-->
<!--                       class="form-control" size="10" maxlength="9""-->
<!--                value="--><?php //echo $oCadastro->getEndereco(); ?><!--"/>-->
<!--            </div>-->
            <div class="col-md-6">
                <label for="cargo_id_cargo" class="control-label col-md-2">Cargo:</label>
                <input type="text" placeholder="Cargo" id="cargo_id_cargo" name="cargo_id_cargo" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getCargo(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="fk_administrador" class="control-label col-md-2">Administrador:</label>
                <input type="text" placeholder="Cargo" id="fk_administrador" name="fk_administrador" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getFkAdministrador(); ?>"/>
            </div>
<!--            <div class="col-md-6">-->
<!--                <label for="fk_administrador" class="control-label col-md-2">Administrador:</label>-->
<!--                <select data-placeholder="Administrador..." name="fk_administrador" id="fk_administrador" class="col-md-6 chosen-select ">-->
<!--                    --><?php //foreach ($oAdministrador as $administrador) { ?>
<!--                        <option value="--><?php //echo $oCadastro->getFkAdministrador(); ?><!--">--><?php //echo $administrador['id_administrador']?><!--</option>;-->
<!--                    --><?PHP //} ?>
<!--                </select>-->
<!--            </div>-->
        </div>
        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
        <?php include_once '../rodape.php'; ?>
    </div>
    </div>
</form>