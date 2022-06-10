<?php

use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;



require __DIR__ . "/../vendor/autoload.php"; // __DIR__ significa do diretório atual.


$caminho = $_SERVER['PATH_INFO'];
$rotas = require   "../config/routes.php"; // retorna o arquivo

if(!array_key_exists($caminho,$rotas)){ // verifica se tem a chave da rota através do path_info
    http_response_code(404);// mandar o código da págian de erro.
    exit();
}


session_start(); // implementar a função np código antes d emandar qualquer post no navegador


$ehRotaDeLogin = stripos($caminho, 'login'); // variavel que localiza a string na variavel,
// o i não faz dirença de maiusculas e minusculas,

if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {// verifica se essa variavel existe se não envia novamente para a pagina index
    header('Location: /login');
    exit();
}

$classeContraladora = $rotas[$caminho]; // acessar a rota através do caminho
/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeContraladora() ;// se o valor da variavel for uma classe, podemos instanciar

$controlador  -> processaRequisicao(); // chamar o método padrão;




