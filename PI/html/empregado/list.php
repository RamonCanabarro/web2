<?php

include_once '../../conexao.php';

class Cadastrar1
{

    protected $id_empregado;
    protected $nome;
    protected $cpf;
    protected $telefone;
    protected $celular;
    protected $email;
    protected $cargo_id_cargo;
    protected $fk_administrador;
    protected $cep;
    protected $rua;
    protected $bairro;
    protected $cidade;
    protected $estado;

    public function getIdEmpregado()
    {
        return $this->id_empregado;
    }

    public function setIdEmpregado($id_empregado)
    {
        $this->id_empregado = $id_empregado;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function getCargo()
    {
        return $this->cargo_id_cargo;
    }

    public function setCargo($cargo_id_cargo)
    {
        $this->cargo_id_cargo = $cargo_id_cargo;
    }

    public function getFkAdministrador()
    {
        return $this->fk_administrador;
    }

    public function setFkAdministrador($fk_administrador)
    {
        $this->fk_administrador = $fk_administrador;
    }
    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;
    }
    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function getEstado()
    {
        return $this->uf;
    }

    public function setEstado($estado)
    {
        $this->uf = $estado;
    }
    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
//        $id_empregado = $dados ['id_empregado'];
        $nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $cargo_id_cargo = $dados['cargo_id_cargo'];
        $fk_administrador = $dados['fk_administrador'];
        $cep = $dados['cep'];
        $rua = $dados['rua'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $estado = $dados['uf'];
        $sql = /** @lang text */
            "insert into empregado (nome, cpf, telefone, celular,cargo_id_cargo, fk_administrador, cep,rua,bairro,cidade,estado)values ('$nome', '$cpf', '$telefone', '$celular', '$cargo_id_cargo','$fk_administrador','$cep','$rua','$bairro','$cidade','$estado');";

        $oConexao = new conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($id_empregado)
    {
        $sql = /** @lang text */
            "select * from empregado where $id_empregado = $id_empregado;";

        $oConexao = new Conexao();
        $empregado = $oConexao->recuperarTodos($sql);

//        $this->id_cliente = $empregado[0]['id_cliente'];
        $this->nome = $empregado[0]['nome'];
        $this->cpf = $empregado[0]['cpf'];
        $this->cargo_id_cargo = $empregado[0]['cargo_id_cargo'];
        $this->telefone = $empregado[0]['telefone'];
        $this->celular = $empregado[0]['celular'];
        $this->fk_administrador = $empregado[0]['fk_administrador'];
    }

    public function recuperarTodos()
    {

        $sql = "select * from empregado 
inner join cargo on cargo.id_cargo = empregado.cargo_id_cargo order by cargo.cargo;";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados)
    {

        $id_empregado = $dados['id_cliente'];
        $cpf = $dados['cpf'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $celular = $dados['celular'];
        $cargo = $dados['cargo'];

        $sql = /** @lang text */
            "update empregado set
					nome = '$nome', cpf='$cpf', endereco='$endereco', telefone='$telefone',celular ='$celular'
				where id_cliente = $id_empregado";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function excluir($id_empregado)
    {

        $sql = "delete from empregado where id_empregado= $id_empregado";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}
