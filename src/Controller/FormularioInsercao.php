<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends  ControlerComHtml implements InterfaceControladorRequisicao
{

    public function  processaRequisicao() : void
    {

        $this ->renderizaHtml("/cursos/formulario.php",[
            "titulo" => "Novo curso"]);
    }


}