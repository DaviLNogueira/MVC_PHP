<?php

use Alura\Cursos\Controller\{Deslogar,
    Exclusao,
    FormularioEdicao,
    FormularioInsercao,
    FormularioLogin,
    ListarCursos,
    Persistencia,
    RealizaLogin};

return  [
    '/listar-cursos' => ListarCursos::class, //colocar sempre dois pontos para referência que é uma classe
    //pois se houver qualquer alterção, irá automaticamente ser atualizada.
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizaLogin::class,
    '/logout' => Deslogar::class,

];

