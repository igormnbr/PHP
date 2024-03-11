<?php

spl_autoload_register(
    function (string $nomeCompletoDaClasse)
    {
        $caminhoCompleto = str_replace('Magno\\Comercial', 'src', $nomeCompletoDaClasse);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto);
        $caminhoArquivo .='.php';
        if (file_exists($caminhoArquivo)){
            require_once $caminhoArquivo;
        }
    }
);


// Então, colar o comando require_once 'autoload.php' nos arquivos que precisar carregar esses modelos;

// Também deve ser colado o namespace da Ln 5 nos mesmos arquivos.