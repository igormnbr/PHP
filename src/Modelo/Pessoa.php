<?php

namespace Magno\Comercial\Modelo;

require_once 'autoload.php';

abstract class Pessoa 
{
    use Get;
    protected string $nome;
    protected int $idade;
    protected string $sexo;
    protected Endereco $endereco;
    protected float $desconto;
    

    public function __construct (string $nome, int $idade, string $sexo, Endereco $endereco)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->endereco = $endereco;
        $this->setDesconto();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }
    public function getSexo(): string
    {
        return $this->sexo;
    }
    
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function setidade($idade): void
    {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }
    
    public function getDesconto(): float
    {
        return $this->desconto;
    }

    protected abstract function setDesconto(): void;

    public abstract function __toString(): string;
}

?>