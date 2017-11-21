<?php
include_once 'list.php';
$oCadastro = new Reservas();
if (!empty($_GET['id_reservas'])) {
    $oCadastro->carregarPorId($_GET['id_reservas']);
}
include_once '../cabecalho.php';?>


<form action="processamento.php?acao=salvar" method="post" name="id_reservas">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center"><h1>Reservas</h1></div>
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
                <label for="qtd_adult">Adultos:</label>
                <input type="number" id="qtd_adult" name="qtd_adult" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getQtdAdult(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="qtd_crian">Crianças:</label>
                <input type="text" id="qtd_crian" name="qtd_crian" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getQtdCrian(); ?>"/>
            </div>
        </div>
        <div class="panel-footer" align="center">
            <button type="submit" value="Enviar" class="btn btn-success" href="">Salvar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
        <?php include_once '../rodape.php';?>
    </div>
</form>

