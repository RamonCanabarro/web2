<?php include_once 'list.php';
$oCadastro = new Cadastrar();
if (!empty($_GET['id_pedidos'])) {
    $oCadastro->carregarPorId($_GET['id_pedidos']);
}
include_once '../cabecalho.php';?>
<form action="processamento.php?acao=salvar" method="post" name="id_pedidos">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center"></div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_pedidos" id="id_pedidos"
                       value="<?php echo $oCadastro->getIdPedidos(); ?>"/></div>
            <div class="col-md-6">
                <label for="horario">Horario:</label>
                <input type="text" id="horario" name="horario" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getHorario(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="quantidade">Porções:</label>
                <input type="text" id="quantidade" name="quantidade" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getQuantidade(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="observacoes">Observações:</label>
                <input type="text" id="observacoes" name="observacoes" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getObservacoes(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getPreco(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="pago">Pago:</label>
                <input type="text" id="pago" name="pago" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getPago(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="mesa">Mesa:</label>
                <input type="text" id="mesa" name="mesa" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getMesa(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="cardapio">Cardapio:</label>
                <input type="text" id="cardapio" name="cardapio" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getCardapio(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="cliente">Cliente:</label>
                <input type="text" id="cliente" name="cliente" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getCliente(); ?>"/>
            </div>


        </div>
        <div class="panel-footer" align="center">
            <button type="submit" value="Enviar" class="btn btn-success" href="">Salvar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
        <?php include_once '../rodape.php';?>
    </div>
</form>

