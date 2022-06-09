<?php

namespace Alura\Cursos\Controller;
 // implementa um contrato fazendo que todoas as classes que implementam elas sejam obrigadas a implementar as funções
interface InterfaceControladorRequisicao
{
    public function  processaRequisicao() : void;
}