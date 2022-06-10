<?php

namespace Alura\Cursos\Controller;

class FormularioLogin extends ControlerComHtml implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        $this -> renderizaHtml("login/formulario.php",['titulo' => "Login"]);
    }
}