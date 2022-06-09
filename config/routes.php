<?php

use Alura\Cursos\Controller\{Exclusao, FormularioEdicao, FormularioInsercao, ListarCursos, Persistencia};

return  [
    '/listar-cursos' => ListarCursos::class, //colocar sempre dois pontos para referência que é uma classe
    //pois se houver qualquer alterção, irá automaticamente ser atualizada.
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class

];

