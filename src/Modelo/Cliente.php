<?php

namespace Magno\Comercial\Modelo;

class Cliente extends Pessoa
{
    private string $dataNascimento;
    private float $renda;

    public function __construct (string $nome, int $idade, string $sexo, Endereco $endereco, string $dataNascimento, float $renda)
    {
        parent::__construct($nome, $idade, $sexo, $endereco);
        $this->dataNascimento = $dataNascimento;
        $this->renda = $renda;
    }
    
    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }

    public function getRenda(): float
    {
        return $this->renda;
    }

    public function setDataNascimento(string $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function setRenda(float $renda): void
    {
        $this->renda = $renda;
    }

    public function setDesconto(): void
    {
        $this->desconto = 0.05;
    }

    public function __toString(): string
        {
            return  "Nome: " . $this->nome .
                    "\nIdade: " . $this->idade .
                    "\nSexo: " . $this->sexo .
                    "\nEndereco: " . $this->endereco->getLogradouro() . ", " . $this->endereco->getNumero() . ", " . $this->endereco->getBairro() . ", " . $this->endereco->getCidade() ."-". $this->endereco->getUf() .
                    "\nData de Nascimento: " . $this->dataNascimento .
                    "\nRenda: R$" . $this->renda;
        }
    }
?>