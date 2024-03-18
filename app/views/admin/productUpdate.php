<div style="margin: 0.5%;">
    <div>
        <div>
            <strong><a style="font-size: large;">Atualizar Produto</a></strong>
            <button><a href="/adminPanel">Voltar</a></button>
            <button><a href="/adminProduct/show">Listar</a></button>
        </div>

        <br>

        <form action="/adminProduct/update" method="POST">
        <input type="hidden" name="id" value="<?=$productFound->id;?>">
            <label for="">Categoria</label>
            <select name="categoria" class="form-select" aria-label="Default select example">
                <option selected>Selecione uma Categoria</option>
                <option value="Postagem">Post</option>
                <option value="Produto">Produto</option>
                <option value="Outro">Outros</option>
            </select><br><br>

            <label for="title">Título:</label>
            <input style="width: 100%;" type="text" placeholder="Escreva um título" name="title" value="<?=$productFound->title;?>"><br><br>

            <label for="sub_title">Subtítulo:</label>
            <input style="width: 100%;" type="text" placeholder="Escreva um sub-titulo" name="sub_title"  value="<?=$productFound->sub_title;?>"><br><br>

            <label for="description">Descrição:</label>
            <textarea style="width: 100%;" rows="20" placeholder="Escreva a descrição do produto!!!" name="description"><?=$productFound->description;?></textarea><br><br>
        
            <label for="price">Preço:</label>
            <input style="width: 100%;" type="number" placeholder="Escreva um Preço" name="price"  value="<?=$productFound->price;?>"><br><br>
            
            <button type="submit">Atualizar</button><br><br>
        </form>
    </div>
</div>