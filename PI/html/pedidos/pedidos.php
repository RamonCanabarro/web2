<?php include_once 'list.php';
$oCadastro = new Cadastrar();
if (!empty($_GET['id_pedidos'])) {
    $oCadastro->carregarPorId($_GET['id_pedidos']);
}
include_once '../clientes/list.php';


$oCliente = (new Cadastrar2())->recuperarTodos();

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
                <label for="cardapio" class="control-label col-md-2">Cardapio:</label>
                <select data-placeholder="Cliente..." name="cardapio" id="cardapio" class="col-md-6 chosen-select ">
                    <?php foreach ($oCliente as $cliente) { ?>
                        <option value="<?php echo $cliente["id_cliente"]; ?>"><?php echo $cliente['nome']?></option>;
                    <?PHP } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="mesa" class="control-label col-md-2">Mesa:</label>
                <select data-placeholder="Cliente..." name="mesa" id="mesa" class="col-md-6 chosen-select ">
                    <?php foreach ($oCliente as $cliente) { ?>
                        <option value="<?php echo $cliente["id_mesa"]; ?>"><?php echo $cliente['mesa']?></option>;
                    <?PHP } ?>
                </select>
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

