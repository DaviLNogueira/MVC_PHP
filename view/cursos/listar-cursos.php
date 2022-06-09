<?php require_once __DIR__ . "/../inicio-html.php"?>
    <a href="/novo-curso" class="btn btn-primary mb-2">
        Novo curso
    </a>
    <ul class="list-group">

        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between">
                <!--Posição dos botões a partir da d-flex-->
                <?= $curso->getDescricao(); ?>
                <span>
                    <a href="/alterar-curso?id=<?=$curso -> getID()?>" class="btn btn-info btn-sm">Editar</a>
                    <a href="/excluir-curso?id=<?=$curso -> getID()?>" class="btn btn-danger btn-sm">Exluir</a>

                </span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php require_once __DIR__ . "/../fim-html.php"?>