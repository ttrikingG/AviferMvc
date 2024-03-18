<div style="margin: 0.5%;">
    <div>
        <div>
            <strong><a style="font-size: large;">Cadastrar Produto</a></strong>
            <button><a href="/adminPanel">Voltar</a></button>
            <button><a href="/adminProduct/show">Listar</a></button>
        </div>

        <br>

        <strong style="color: green;"><?php echo message('product') ?></strong>

        <form action="/adminProduct/store" method="POST" enctype="multipart/form-data">
            <label for="">Categoria</label>
            <select name="categoria" class="form-select" aria-label="Default select example">
                <option selected>Selecione uma Categoria</option>
                <option value="Pstagem">Post</option>
                <option value="Produto">Produto</option>
                <option value="Outros">Outros</option>
            </select><br><br>

            <label for="">Imagens</label>
            <input type="file" name="file" accept="image/jpeg, image/jpg, image/png" required><br><br>
    
            <label for="title">Título:</label>
            <input style="width: 100%;" placeholder="Escreva um título" name="title"><br><br>
            <?php echo message('title')?>

            <label for="sub_title">Subtítulo:</label>
            <input style="width: 100%;" type="text" placeholder="Escreva um sub-titulo" name="sub_title"><br><br>
            <?php echo message('sub_title')?>

            <label for="description">Descrição:</label>
            <textarea style="width: 100%;" rows="10" placeholder="Escreva a deescrição do produto!!!" name="description"></textarea><br><br>
            <?php echo message('description')?>

            <label for="price">Preço:</label>
            <input style="width: 100%;" type="number" placeholder="Escreva um Preço" name="price"><br><br>
            <?php echo message('price')?>

            <button type="submit">Cadastrar</button><br><br>
        </form>
    </div>

    <p>Obs:</p>
</div>