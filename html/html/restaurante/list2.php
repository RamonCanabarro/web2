
<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastro{
    protected $nome_restaurante;
    protected $administrador;
    protected $id;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getNome_restaurante(){
        return $this->nome_restaurante;
    }

    public function setNome_restaurante($nome_restaurante){
        $this->nome_restaurante = $nome_restaurante;
    }
    public function getAdministrador(){
        return $this->administrador;
    }

    public function setAdministrador($administrador){
        $this->administrador = $administrador;
    }

    /**
     * @param $dados
     * @return mixed
     */
	public function inserir($dados){
        $nome_restaurante = $dados['nome_restaurante'];
        $id = $dados['id'];
        $administrador = $dados['administrador'];

        $sql = /** @lang text */
        "insert into restaurante (id,nome_restaurante, administrador_id_administrador) values('$id','$nome_restaurante', '$administrador')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id){

        $sql = "select * from restaurante where id = $id";

        $oConexao = new conexao();
        $restaurante = $oConexao->recuperarTodos($sql);
        $this->setId($restaurante[0]['id']);
        $this->setNome_restaurante($restaurante[0]['nome_restaurante']);
        return $this;
    }
    public function excluir($nome_restaurante){

        $sql = "delete from restaurante where $nome_restaurante = $nome_restaurante";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos(){

        $sql = "select * from restaurante";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados){

        $nome_restaurante = $dados['nome_restaurante'];
        $id = $dados['id'];
        $sql = "update restaurante set
					nome_restaurante = '$nome_restaurante'
				where id = $id";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}