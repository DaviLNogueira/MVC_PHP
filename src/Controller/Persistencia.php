<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;


class Persistencia implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;
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
        $curso->setDescricao($descricao);// pega o valor do post do formulario especificamente com o id

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT);

        if (!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $mensagem = 'Curso atualizado com sucesso';
        } else {
            //inserir
            $this->entityManager->persist($curso);
            $mensagem = 'Curso inserido com sucesso ';
        }
        $this -> defineMesagem('success',$mensagem);

        $this->entityManager->flush();




            header("Location: /listar-cursos", true, 302); //redirecionar para um site
            //response_code significa o estato da resposta códigos para web ;
        }
}