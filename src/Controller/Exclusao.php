<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;


class Exclusao implements InterfaceControladorRequisicao
{



    private EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this -> entityManager = (new EntityManagerCreator()) ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
        //recebe umm requisição do get, pega a variável id e filtra ela se é um inteiro;



        if(is_null($id) || $id === false){ // is_null verifica se a variavel é nula
            header("Location: /listar-cursos");
            return; // quando é feito um redirecionamento é o código foram do método hTTP, é executado.
        }

        $curso = $this ->entityManager->getReference(Curso::class,$id);
        $this ->entityManager->remove($curso);
        $this->entityManager->flush();
        $_SESSION['tipo_mensagem'] = 'danger';
        $_SESSION[ 'mensagem'] = 'Curso Excluido com sucesso ';
        header("Location: /listar-cursos");
    }
}