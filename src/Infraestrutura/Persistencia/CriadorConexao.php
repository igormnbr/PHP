<?php

namespace Magno\Comercial\Infraestrutura\Persistencia;

use PDO;

class CriadorConexao
{
    public static function criarConexao(): PDO
    {
        try {
            $pdo = new PDO();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $excecao) {
            echo 'ERRO: ' . $excecao->getMessage();
          }
    }
}