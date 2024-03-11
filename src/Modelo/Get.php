<?php

namespace Magno\Comercial\Modelo;

trait get
{
    public function __get(string $atributo)
    {
        $metodo = 'get' . ucfirst($atributo);
        return $this->$metodo();
    }
}