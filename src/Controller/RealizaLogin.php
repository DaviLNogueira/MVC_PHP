<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityRepository;

class RealizaLogin implements  InterfaceControladorRequisicao
{
    private EntityRepository $repositorioDeUsuarios;
    public function __construct()
    {
        $entityManager = (new EntityManagerCreator()) -> getEntityManager();
        $this -> repositorioDeUsuarios = $entityManager -> getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST,
        "email",
        FILTER_VALIDATE_EMAIL);

        if (is_null($email) || $email === false) {
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = "O e-mail digitado não é um e-mail válido";
            header('Location: /login');
            exit();
        }
        $senha = filter_input(INPUT_POST,
        'senha');

        /** @var Usuario $usuario*/ //Diz para o php que o tipo da variavel
        $usuario = $this-> repositorioDeUsuarios->findOneBy(['email' => $email]);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
            $_SESSION['tipo_mensagem'] = 'danger';// podemos armazenar qualquer tipo de informação na Seção jão que vai de uma pagina a outra
            $_SESSION['mensagem'] = "E-mail ou senha inválidos";
            header('Location: /login');
            return;
        }

        session_start();//começa a seção do usuário e poderá armazenar dados;
        $_SESSION['logado'] = true;

        header("Location: /listar-cursos", true, 302);
    //Lembrar que as senhas geradas eplo password_hash devem ser colocadas na função com aspas simples
        // password_hash('123456',PASSWORD_ARGON2I);

    }


}