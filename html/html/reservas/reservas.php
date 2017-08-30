<?php
include_once 'list.php';
$oCadastro = new Cadastrar();
if (!empty($_GET['id_reservas'])) {
    $oCadastro->carregarPorId($_GET['id_reservas']);
}

include_once '../clientes/list.php';


$oCliente = (new Cadastrar2())->recuperarTodos();

include_once '../cabecalho.php';?>


<form action="processamento.php?acao=salvar" method="post" name="id_reservas">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center"></div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id" id="id"
                       value="<?php echo $oCadastro->getIdReservas(); ?>"/></div>
            <div class="col-md-6">
                <label for="data">Data:</label>
                <input type="text" id="data" name="data" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getHorario(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="qtd_adult">Pessoas:</label>
                <input type="text" id="qtd_adult" name="qtd_adult" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getQtdAdult(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="qtd_crian">Crianças:</label>
                <input type="text" id="qtd_crian" name="qtd_crian" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getQtdCrian(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="cliente" class="control-label col-md-2">Cliente:</label>
                <select data-placeholder="Cliente..." name="cliente" id="cliente" class="col-md-6 chosen-select ">
                    <?php foreach ($oCliente as $cliente) { ?>
                        <option value="<?php echo $cliente["id_cliente"]; ?>"><?php echo $cliente['nome']?></option>;
                    <?PHP } ?>
                </select>
            </div>

        </div>
        <div class="panel-footer" align="center">
            <button type="submit" value="Enviar" class="btn btn-success" href="">Salvar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
        <?php include_once '../rodape.php';?>
    </div>
</form>

