
<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastro{
    protected $nome_restaurante;
    protected $uf;
    protected $endereco;
    protected $cep;
    protected $bairro;
    protected $cidade;
    protected $numero;
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
    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }
    public function getEndereco(){
    return $this->endereco;
}
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setNumero($numero){
        $this->numero= $numero;
    }
    public function getNumero(){
        return $this->numero;
    }

    /**
     * @param $dados2
     * @return mixed
     */
	public function inserir($dados2){
        $nome_restaurante = $dados2['nome_restaurante'];
        $cidade = $dados2['cidade'];
        $endereco = $dados2['endereco'];
        $cep = $dados2['cep'];
        $bairro = $dados2['bairro'];
        $numero = $dados2['numero'];
        $uf = $dados2['uf'];

        $sql ="insert into restaurante (nome_restaurante, uf, cep, endereco, cidade, bairro, numero) values('$nome_restaurante', '$uf', '$cep', '$endereco', '$cidade', '$bairro', '$numero')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id){

        $sql = "select * from restaurante where id = $id";

        $oConexao = new Conexao();
        $restaurante = $oConexao->recuperarTodos($sql);
        $this->setId($restaurante[0]['id']);
        $this->setNome_restaurante($restaurante[0]['nome_restaurante']);
        return $this;
    }
    public function excluir($nome_restaurante){

        $sql = "delete from restaurante where $nome_restaurante = $nome_restaurante";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos(){

        $sql = "select * from restaurante";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados){

        $nome_restaurante = $dados['nome_restaurante'];
        $id = $dados['id'];
        $sql = "update restaurante set
					nome_restaurante = '$nome_restaurante'
				where id = $id";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

}