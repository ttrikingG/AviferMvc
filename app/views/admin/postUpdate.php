<div style="margin: 0.5%;">
    <div>
        <strong><a style="font-size: large;">Editar Post</a></strong>
        <button><a href="/adminPost">Voltar</a></button>
        <button><a href="/adminPanel">Panel</a></button>
    </div>

    <br>

    <form action="/adminPost/update" method="POST">
        <input type="hidden" name="id" value="<?=$postFound->id;?>">
        <label for="">Título</label>
        <input style="width: 100%;" type="text" class="form-control" name="title" placeholder="Escreva um título" value="<?=$postFound->title;?>"><br><br>

        <label for="">Sub titulo</label>
        <input style="width: 100%;" type="text" class="form-control" name="subTitle" placeholder="Escreva um sub-titulo" value="<?=$postFound->subTitle;?>"><br><br>

        <label for="">Thumbnail</label>
        <select name="image_path" class="form-select" aria-label="Default select example">
            <option selected>Selecione uma imagem</option>
        </select><br><br>

        <textarea style="width: 100%;"  rows="20" class="form-control" name="content"><?=$postFound->content;?></textarea><br><br>

        <button type="submit">Atualizar</button><br><br>
    </form>
</div>