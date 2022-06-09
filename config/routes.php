<?php

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

return  [
    '/listar-cursos' => ListarCursos::class, //colocar sempre dois pontos para referência que é uma classe
    //pois se houver qualquer alterção, irá automaticamente ser atualizada.
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class
];

