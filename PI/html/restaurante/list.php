
<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastrar0{
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

        $sql = "insert into restaurante (nome_restaurante, administrador_id_administrador) values('$nome_restaurante', '$administrador')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function alterar($dados){

        $nome = $dados['nome_restaurante'];
        $id = $dados['id'];

        $sql =  /** @lang text */
            "update restaurante set
					nome_restaurante = '$nome'
				where id = $id";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function carregarPorId($id){

        $sql = "select * from restaurante where id = $id";

        $oConexao = new conexao();
        $restaurante = $oConexao->recuperarTodos($sql);

        $this->nome_restaurante=$restaurante[0]['nome_restaurante'];
        $this->administrador=$restaurante[0]['administrador_id_administrador'];
    }
    public function excluir($id){

        $sql = "delete from restaurante where id = $id";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos(){

        $sql = "select adm, nome_restaurante from restaurante 
inner join administrador = nome
where  administrador_id_administrador = id_administrador";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }


}