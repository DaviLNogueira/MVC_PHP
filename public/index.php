<?php

switch ($_SERVER['PATH_INFO'] ){
    //$_SERVER  = traz informações sobre a requisção do usuário
    //PATH_INFO = retorna a url digitada pelo o usuário
    case '/listar-cursos':
        require 'listar-cursos.php';
        break;

    case($_SERVER['PATH_INFO'] === '/novo-curso'):
        require 'formulario-novo-curso.php';
        break;
    default:
        echo "Erro 404";


}
