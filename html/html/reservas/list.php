
<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastrar{
    protected $Qtd_Adult;
    protected $Qtd_Crian;
    protected $horario;
    protected $id_reservas;
    protected $cliente;

    public function getIdReservas(){
        return $this->id_reservas;
    }

    public function setIdReservas($id_reservas){
        $this->id_reservas = $id_reservas;
    }
    public function getQtdAdult(){
        return $this->Qtd_Adult;
    }

    public function setQtdAdult($Qtd_Adult){
        $this->Qtd_Adult = $Qtd_Adult;
    }
    public function getHorario(){
        return $this->horario;
    }
    public function setHorario($horario){
        $this->horario = $horario;
    }
    public function getQtdCrian(){
        return $this->Qtd_Crian;
    }
    public function setQtdCrian($Qtd_Crian){
        $this->Qtd_Crian = $Qtd_Crian;
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
        $Qtd_Adult = $dados['qtd_adult'];
        $horario = $dados['horario'];
        $Qtd_Crian = $dados['qtd_crian'];
        $cliente = $dados['cliente'];

        $sql = /** @lang text */
        "insert into reservas (horario, Qtd_Adult, Qtd_Crian, cliente_id_cliente) values('$horario', '$Qtd_Adult', '$Qtd_Crian', '$cliente')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id_reservas){

        $sql = "select * from reservas where id_reservas = $id_reservas";
        $oConexao = new Conexao();
        $reservas = $oConexao->recuperarTodos($sql);

        $this->id_rservas = $reservas[0]['id_rservas'];
        $this->horario = $reservas[0]['horario'];
        $this->Qtd_Adult = $reservas[0]['Qtd_Adult'];
        $this->Qtd_Crian = $reservas[0]['Qtd_Crian'];
        $this->cliente_id_cliente = $reservas[0]['cliente_id_cliente'];

    }
    public function excluir($id_reservas){

        $sql = "delete from reservas where id_reservas = $id_reservas";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos(){

        $sql = "select * from reservas";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados){

        $id_reservas = $dados['nome_restaurante'];
        $id_reservas = $dados['id'];
        $sql = "update reservas set
					nome_restaurante = '$id_reservas'
				where id = $id_reservas";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}