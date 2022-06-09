<?php

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;


require __DIR__ . "/../vendor/autoload.php"; // __DIR__ significa do diretório atual.


switch ($_SERVER['PATH_INFO'] ){
    //$_SERVER  = traz informações sobre a requisção do usuário
    //PATH_INFO = retorna a url digitada pelo o usuário
    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador -> processaRequisicao();
        break;

    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador -> processaRequisicao();
        break;

    case '/salvar-curso':
        $controlador = new Persistencia();
        $controlador -> processaRequisicao();
        break;

    default:
        echo "Erro 404";


}
