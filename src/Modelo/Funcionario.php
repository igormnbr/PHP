<?php

namespace Magno\Comercial\Modelo;

require_once 'autoload.php';

class Funcionario extends Pessoa implements Autenticar
{
    private string $cargo;
    private float $salario;
    private string $senha;

    public function __construct (string $nome, int $idade, string $sexo, Endereco $endereco, string $cargo, float $salario)
    {
        parent::__construct($nome, $idade, $sexo, $endereco);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    
    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function setDesconto(): void
    {
        $this->desconto = 0.10;
    }

    public function __toString(): string
    {
        return  "Nome: " . $this->nome .
                "\nIdade: " . $this->idade .
                "\nSexo: " . $this->sexo .
                "\nEndereco: " . $this->endereco->getLogradouro() . ", " . $this->endereco->getNumero() . ", " . $this->endereco->getBairro() . ", " . $this->endereco->getCidade() ."-". $this->endereco->getUf() .
                "\nCargo: " . $this->cargo .
                "\nSalario: R$" . $this->salario;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function login($nome, $senha): void
    {
        if ($this->nome === $nome && $this->senha === $senha){
            echo "LOGIN: Usuário(a) " . $this->nome . " logado com sucesso";
        } else {
            echo "LOGIN: Usuário(a) ou senha incorretos.";
        }
    }
}

?>