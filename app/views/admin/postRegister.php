<div style="margin: 0.5%;">
    <div>
        <strong><a style="font-size: large;">Cadastrar Post</a></strong>
        <button><a href="/adminPanel">Voltar</a></button>
        <button><a href="/adminPost/show">Listar</a></button>
    </div>

    <br>

    <strong style="color: green;"><?php echo message('post') ?></strong>

    <form action="/adminPost/store" method="POST" role="form">
        <label for="">Título</label>
        <input style="width: 100%;" type="text" class="form-control" name="title" placeholder="Escreva um título"><br><br>
        <?php echo message('title')?>

        <label for="">Sub titulo</label>
        <input style="width: 100%;" type="text" class="form-control" name="subTitle" placeholder="Escreva um sub-titulo"><br><br>
        <?php echo message('subTitle')?>

        <label for="">Thumbnail</label>
        <select name="image_path" class="form-select" aria-label="Default select example">
            <option selected>Selecione uma imagem</option>
        </select><br><br>

        <textarea style="width: 100%;"  rows="20" class="form-control" name="content" placeholder="Escreva sua postagem!!!"></textarea><br><br>
        <?php echo message('content')?>

        <button type="submit">Fazer o Post</button><br><br>
    </form>
</div>