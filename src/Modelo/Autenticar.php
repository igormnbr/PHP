<?php

namespace Magno\Comercial\Modelo;

interface Autenticar {
    public function login (Funcionario $funcionario, string $senha): void;

}

?>