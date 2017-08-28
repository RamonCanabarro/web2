
<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastro{
    protected $quantidade;
    protected $preco;
    protected $horario;
    protected $id_pedidos;
    protected $pago;
    protected $observacoes;
    protected $mesa;
    protected $cardapio;
    protected $cliente;

    public function getIdPedidos(){
        return $this->id_pedidos;
    }

    public function setIdPedidos($id_pedidos){
        $this->id_pedidos = $id_pedidos;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getHorario(){
        return $this->horario;
    }
    public function setHorario($horario){
        $this->horario = $horario;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getPago(){
        return $this->pago;
    }
    public function setPago($pago){
        $this->pago = $pago;
    }
    public function getObservacoes(){
        return $this->observacoes;
    }
    public function setObservacoes($observacoes){
        $this->observacoes = $observacoes;
    }
    public function getMesa(){
        return $this->mesa;
    }
    public function setMesa($mesa){
        $this->mesa = $mesa;
    }
    public function getCardapio(){
        return $this->cardapio;
    }
    public function setCardapio($cardapio){
        $this->cardapio = $cardapio;
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }



    /**
     * @param $dados
     * @return mixed
     */
	public function inserir($dados){
        $quantidade = $dados['quantidade'];
        $id_pedidos = $dados['id_pedidos'];
        $horario = $dados['horario'];
        $preco = $dados['preco'];
        $pago = $dados['pago'];

        $sql = /** @lang text */
        "insert into reservas (id_pedidos,horario, quantidade, preco, cliente_id_cliente) values('$id_pedidos','$horario', '$quantidade', '$preco', '$pago')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id_pedidos){

        $sql = "select * from reservas where id = $id_pedidos";

        $oConexao = new conexao();
        $restaurante = $oConexao->recuperarTodos($sql);
        $this->setId($restaurante[0]['id']);
        $this->setNome_restaurante($restaurante[0]['nome_restaurante']);
        return $this;
    }
    public function excluir($quantidade){

        $sql = "delete from reservas where $quantidade = $quantidade";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos(){

        $sql = "select * from reservas";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados){

        $quantidade = $dados['nome_restaurante'];
        $id_pedidos = $dados['id'];
        $sql = "update reservas set
					nome_restaurante = '$quantidade'
				where id = $id_pedidos";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}