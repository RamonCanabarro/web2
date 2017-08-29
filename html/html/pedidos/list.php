<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastrar
{
    protected $quantidade;
    protected $preco;
    protected $horario;
    protected $id_pedidos;
    protected $pago;
    protected $observacoes;
    protected $mesa;
    protected $cardapio;
    protected $cliente;

    public function getIdPedidos()
    {
        return $this->id_pedidos;
    }

    public function setIdPedidos($id_pedidos)
    {
        $this->id_pedidos = $id_pedidos;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getPago()
    {
        return $this->pago;
    }

    public function setPago($pago)
    {
        $this->pago = $pago;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
    }

    public function getMesa()
    {
        return $this->mesa;
    }

    public function setMesa($mesa)
    {
        $this->mesa = $mesa;
    }

    public function getCardapio()
    {
        return $this->cardapio;
    }

    public function setCardapio($cardapio)
    {
        $this->cardapio = $cardapio;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }


    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $quantidade = $dados['quantidade'];
        $observacoes = $dados['observacoes'];
        $horario = $dados['horario'];
        $preco = $dados['preco'];
        $pago = $dados['pago'];
        $mesa = $dados['mesa'];
        $cardapio = $dados['cardapio'];
        $cliente = $dados['cliente'];

        $sql = /** @lang text */
            "insert into pedidos (horario, quantidade, observacoes, preco, pago, mesa_id_mesa,cardapio_id_cardapio,cliente_id_cliente) values('$horario', '$quantidade', '$observacoes','$preco', '$pago','$mesa','$cardapio','$cliente')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id_pedidos)
    {

        $sql = "select * from pedidos where id_pedidos = $id_pedidos";

        $oConexao = new conexao();
        $pedidos = $oConexao->recuperarTodos($sql);
        $this->horario = $pedidos[0]['horario'];
        $this->quantidade = $pedidos[0]['quantidade'];
        $this->preco = $pedidos[0]['preco'];
        $this->cliente_id_cliente = $pedidos[0]['cliente_id_cliente'];
        $this->pago = $pedidos[0]['pago'];
        $this->observacoes = $pedidos[0]['observacoes'];
        $this->mesa_id_mesa = $pedidos[0]['mesa_id_mesa'];
        $this->cardapio_id_cardapio = $pedidos[0]['cardapio_id_cardapio'];
    }

    public function excluir($id_pedidos)
    {

        $sql = "delete from pedidos where id_pedidos = $id_pedidos";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos()
    {

        $sql = "select * from pedidos";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados)
    {
        $id_pedidos = $dados['id_pedidos'];
        $horario = $dados['horario'];
        $quantidade = $dados['quantidade'];
        $preco = $dados['preco'];
        $mesa = $dados['mesa'];
        $cardapio = $dados['cardapio'];
        $cliente = $dados['cliente'];
        $sql = "update pedidos set
					horario = '$horario', quantidade = '$quantidade', preco = '$preco', mesa_id_mesa='$mesa', cardapio='$cardapio',cliente='$cardapio' 
				where id = $id_pedidos";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}