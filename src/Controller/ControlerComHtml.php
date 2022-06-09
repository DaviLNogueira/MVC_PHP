<?php

namespace Alura\Cursos\Controller;

abstract class ControlerComHtml
{
    public function renderizaHtml(string $caminho, array$dados):void
    {
        extract($dados) ; // extrai os dados de um array associativo
        ob_start(); // armazena tudo o que será exibido
        require __DIR__ . "/../../view/" . $caminho;
        ob_get_clean(); // retorna o valor do buffer e limpa depois
    }
}