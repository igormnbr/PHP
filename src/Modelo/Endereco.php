<?php

namespace Magno\Comercial\Modelo;

require_once 'autoload.php';

class Endereco 
{
    use Get;
    protected string $logradouro;
    protected string $numero;
    protected string $bairro;
    protected string $cidade;
    protected string $cep;
    protected string $uf;

    public function __construct (string $logradouro, string $numero, string $bairro, string $cidade, string $cep, string $uf)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->uf = $uf;

    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function setLogradouro(): void
    {
        $this->logradouro = $logradouro;
    }

    public function setNumero(): void
    {
        $this->numero = $numero;
    }

    public function setBairro(): void
    {
        $this->bairro = $bairro;
    }

    public function setCidade(): void
    {
        $this->cidade = $cidade;
    }

    public function setCep(): void
    {
        $this->cep = $cep;
    }

    public function setUf(): void
    {
        $this->uf = $uf;
    }
}