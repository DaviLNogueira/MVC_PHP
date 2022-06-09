<?php require_once __DIR__ . "/../inicio-html.php" ?>
    <div>


        <form action="/salvar-curso" method="post"> <!--action para onde salvar o arquivo , method o que irá fazer-->
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" id ="descricao" name="descricao" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Salvar</button>
        </form>

<?php require_once __DIR__ . "/../fim-html.php" ?>