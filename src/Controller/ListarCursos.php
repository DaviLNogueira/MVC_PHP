<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;use Doctrine\ORM\EntityRepository;

class ListarCursos extends ControlerComHtml implements InterfaceControladorRequisicao
{
    private EntityRepository $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this -> repositorioDeCursos = $entityManager
            ->getRepository(Curso::class);
    }

    public function processaRequisicao():void
{


        $this ->renderizaHtml("cursos/listar-cursos.php",[
            "cursos" => $this -> repositorioDeCursos->findAll(),
            "titulo" => 'Lista de cursos']);


    }


}