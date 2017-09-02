<?php
include_once 'list1.php';
$oCadastro = new Cadastrar3();
if (!empty($_GET['id_cargo'])) {
    $oCadastro->carregarPorId($_GET['id_cargo']);
}
include_once '../cabecalho.php';
?>
<form class=" col-md-10" action="processamento.php?acao=salvar" method="post" name="id_cargo">
    <div class="panel panel-primary" aling="center">
        <div class="panel-heading" align="center">
            <h4>Cadastro</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_cargo" id="id_cargo"
                       value="<?php echo $oCadastro->getIdCargo(); ?>"/></div>

            <div class="col-md-6">
                <label for="cargo">Cargo</label>
                <input type="text" placeholder="Nome" id="cargo" name="cargo" required
                       class="form-control text-uppercase"
                       value="<?php echo $oCadastro->getCargo(); ?>"/>
            </div>

            <div class="col-md-6">
                <label for="salario">Salario:</label>
                <input type="text" placeholder="" id="salario" name="salario" required
                       class="form-control"
                       value="<?php echo $oCadastro->getSalario(); ?>"/>
            </div>
        </div>
            <div class="panel-footer" align="center">
                <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
                <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
            </div>
            <?php include_once '../rodape.php'; ?>
        </div>
    </div>
</form>