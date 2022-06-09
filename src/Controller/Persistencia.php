<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;


class Persistencia implements InterfaceControladorRequisicao
{
    private EntityManagerInterface $entityManager ;
    public function __construct()
    {
        $this-> entityManager = (new EntityManagerCreator()) -> getEntityManager();
    }

    public function processaRequisicao(): void
    {
        // pagar dados do formulario
        // montar modelo Curso
        //Inserir no banco

        $descricao = strip_tags($_POST['descricao']); //filtra os dados do post, sempre passando o nome da variavel do html
        //responsavel por retirar tagas;
        $curso = new Curso();
        $curso -> setDescricao($descricao);// pega o valor do post do formulario especificamente com o id
        $this -> entityManager ->persist($curso);
        $this -> entityManager -> flush();


        header("Location: /listar-cursos",true,302); //redirecionar para um site
        //response_code significa o estato da resposta códigos para web ;
    }


}