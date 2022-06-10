<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php if(isset($_SESSION['logado'])): ?>
    <nav class="navbar navbar-dark bg-dark mb-2">
        <!--mb-2 tem como função deixar um espaço-->
        <a class="navbar-brand" href="/listar-cursos">Home</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/logout">Sair</a>
            </li>

        </ul>
    </nav>
<?php endif ?> <!--Irá executar se a condição for verdadeira e fecha ela-->

<div class="container">
    <div class="container">
        <div class="jumbotron">
            <h1><?= $titulo; ?></h1>
        </div>
        <?php if(isset($_SESSION['mensagem'])): ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensagem']; ?>">
                <?= $_SESSION['mensagem']; ?>
            </div>

        <?php
            unset($_SESSION['mensagem']);
            unset($_SESSION['tipo_mensagem']);
        endif;?>
