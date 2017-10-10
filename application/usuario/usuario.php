<?php

include_once '../conexao.php';

class Usuario
{

    protected $id_usuario;
    protected $nome;
    protected $telefone;
    protected $sexo;
    protected $email;
    protected $senha;
    protected $id_perfil;
    protected $id_uf;
    protected $id_municipio;

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getIdPerfil()
    {
        return $this->id_perfil;
    }

    /**
     * @param mixed $id_perfil
     */
    public function setIdPerfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }

    /**
     * @return mixed
     */
    public function getIdUf()
    {
        return $this->id_uf;
    }

    /**
     * @param mixed $id_uf
     */
    public function setIdUf($id_uf)
    {
        $this->id_uf = $id_uf;
    }

    /**
     * @return mixed
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }

    /**
     * @param mixed $id_municipio
     */
    public function setIdMunicipio($id_municipio)
    {
        $this->id_municipio = $id_municipio;
    }


    public function inserir($dados)
    {
        $id_usuario = $dados['id_usuario'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $sexo = $dados['sexo'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $id_perfil = $dados['id_perfil'];
        $id_uf = $dados['id_uf'];
        $id_municipio = $dados['id_municipio'];

        $sql = /** @lang text */
            "insert into usuario (nome, telefone,sexo, email, senha, id_perfil, id_uf,id_municipio) values ('$nome','$telefone','$sexo','$email','$senha','$id_perfil','$id_uf','$id_municipio')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
       }

    public function alterar($dados)
    {
        $id_usuario = $dados['id_usuario'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $sexo = $dados['sexo'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $id_perfil = $dados['id_perfil'];
        $id_uf = $dados['id_uf'];
        $id_municipio = $dados['id_municipio'];


        $sql = "update usuario set
					nome = '$nome',
					telefone = '$telefone',
					sexo = '$sexo',
					email = '$email',
					senha = '$senha',
					id_perfil = '$id_perfil',
					id_uf = '$id_uf',
					id_municipio = '$id_municipio'
				where id_usuario = $id_usuario ";

        $conexao = new Conexao();
        return $conexao->executar($sql);
    }

    public function excluir($id_usuario)
    {
        $sql = "delete from usuario where id_usuario = $id_usuario";

        $conexao = new Conexao();
        return $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $conexao = new Conexao();

        $sql="select usuario.id_usuario,usuario.nome, uf.nome as uf, municipio.nome as municipio from usuario
left join uf
	on usuario.id_uf = uf.id_uf
left join municipio
	on usuario.id_municipio = municipio.id_municipio";

//        $sql = "select * from usuario";
        return $conexao->recuperarTodos($sql);
    }
    public function recupera_municipios($id_uf){
        $conexao = new Conexao();
       $sql= "SELECT nome FROM municipio where id_uf= $id_uf";
        return $conexao->recuperarTodos($sql);
    }


    public function carregarPorId($id_usuario)
    {
        $conexao = new Conexao();

        $sql = "select * from usuario where id_usuario = $id_usuario";
        $dados = $conexao->recuperarTodos($sql);

        $this->id_usuario = $dados[0]['id_usuario'];
        $this->nome = $dados[0]['nome'];
        $this->telefone = $dados[0]['telefone'];
        $this->sexo = $dados[0]['sexo'];
        $this->email = $dados[0]['email'];
        $this->senha = $dados[0]['senha'];
        $this->id_perfil = $dados[0]['id_perfil'];
        $this->id_uf = $dados[0]['id_uf'];
        $this->id_municipio = $dados[0]['id_municipio'];
    }
}