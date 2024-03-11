<?php

echo "Hello World" .PHP_EOL;

require_once 'autoload.php';

use Magno\Comercial\Modelo\Pessoa;
use Magno\Comercial\Modelo\Endereco;
use Magno\Comercial\Modelo\Funcionario;
use Magno\Comercial\Modelo\Cliente;
use Magno\Comercial\Modelo\Autenticar;

$endereco1 = new Endereco("Rua Sebastiana Arantes Fonseca", "663", "Santa Mônica", "Uberlândia", "38408-232", "MG");

// $pessoa1 = new Pessoa("Igor Magno", 26, "Masculino", $endereco1);
// $pessoa2 = new Pessoa("Luanna Gomes", 26, "Feminino", $endereco1);

$funcionario1 = new Funcionario("Paula", 29, "Feminino", $endereco1, "Analista Ambiental", 3000);
$cliente1 = new Cliente("Jorge", 39, "Masculino", $endereco1, "31/03/1984", 4000);

echo $funcionario1->__toString() .PHP_EOL;
echo $cliente1->__toString() .PHP_EOL;

echo $endereco1->logradouro .PHP_EOL;
echo $endereco1->bairro .PHP_EOL;

$funcionario1->setSenha("123");
$funcionario1->login("Paula", "123");

// echo "Pessoa 01: {$funcionario1->getNome()}, {$funcionario1->getIdade()} anos, do sexo {$funcionario1->getSexo()}, residente em {foreach($endereco1 as $item) {echo $item;}}." .PHP_EOL;
// echo "Pessoa 02: {$cliente1->getNome()}, {$cliente1->getIdade()} anos, do sexo {$cliente1->getSexo()}." .PHP_EOL;

// echo "Funcionário 01: {$funcionario1->getNome()}, {$funcionario1->getIdade()} anos, do sexo {$funcionario1->getSexo()}, residente em {$funcionario1->endereco->getLogradouro()}." .PHP_EOL;
// echo "Cliente 01: {$cliente1->getNome()}, {$cliente1->getIdade()} anos, do sexo {$cliente1->getSexo()}, residente em {$cliente1->endereco->getLogradouro()}." .PHP_EOL;



?>