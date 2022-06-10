<?php

namespace Alura\Cursos\Controller;

abstract class ControlerComHtml
{
    public function renderizaHtml(string $caminho, array$dados):void
    {
        extract($dados) ; // extrai os dados de um array associativo

        require __DIR__ . "/../../view/" . $caminho;

    }
}