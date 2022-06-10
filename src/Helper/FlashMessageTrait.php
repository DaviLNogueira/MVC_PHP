<?php

namespace Alura\Cursos\Helper;

trait FlashMessageTrait // utilizada como auxiliar os Tratit's
{

    public function  defineMesagem(string $tipo , string $mensagem): void
    {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION ['tipo_mensagem'] = $tipo;
    }
}