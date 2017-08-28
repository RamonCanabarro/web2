
<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastro{
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
        $id_reservas = $dados['id_reservas'];
        $horario = $dados['horario'];
        $Qtd_Crian = $dados['qtd_crian'];
        $cliente = $dados['cliente'];

        $sql = /** @lang text */
        "insert into reservas (id_reservas,horario, Qtd_Adult, Qtd_Crian, cliente_id_cliente) values('$id_reservas','$horario', '$Qtd_Adult', '$Qtd_Crian', '$cliente')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id_reservas){

        $sql = "select * from reservas where id = $id_reservas";

        $oConexao = new conexao();
        $restaurante = $oConexao->recuperarTodos($sql);
        $this->setId($restaurante[0]['id']);
        $this->setNome_restaurante($restaurante[0]['nome_restaurante']);
        return $this;
    }
    public function excluir($Qtd_Adult){

        $sql = "delete from reservas where $Qtd_Adult = $Qtd_Adult";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos(){

        $sql = "select * from reservas";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados){

        $Qtd_Adult = $dados['nome_restaurante'];
        $id_reservas = $dados['id'];
        $sql = "update reservas set
					nome_restaurante = '$Qtd_Adult'
				where id = $id_reservas";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}