<?php 

class GrupoUsuario {
    // Propriedades
    private $id;
    private $nome;
    private $descricao;
    private $dataCriacao;
    private $dataAtualizacao;
    private $usuarioAtualizacao;
    private $ativo;
    
    public function __construct($id, $nome, $descricao, $data, $dataCriacao, $dataAtualizacao, $ativo)
    {
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->dataCriacao = $dataCriacao;
    $this->dataAtualizacao = $dataAtualizacao;
    $this->usuarioAtualizacao = null;
    $this->ativo = $ativo;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getDataCriacao(){
        return $this->dataCriacao;
    }

    public function getDataAtualizacao(){
        return $this->dataAtualizacao;
    }

    public function getUsuarioAtualizacao(){
        return $this->usuarioAtualizacao;
    }

    public function getAtivo(){
        return $this->ativo;
    }
}

?>