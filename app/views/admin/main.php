<main>
    <div>
        <div style="text-align: center;">
            <h3>Listar</h3>
            <button><a class="active" href="/adminPanel">Panel</a></button>
            <button><a href="/adminPost/show">Posts</a></button>
            <button><a href="/adminProduct/show">Produtos</a></button>
            <button> <a href="/adminPanel/user_show">Users</a></button>
            <button><a href="/adminPanel/image_show">Fotos</a></button>
            <button><a href="#about">Config</a></button>
        </div>

        <div style="text-align: center;">
            <h3>Cadastrar</h3>
            <button><a class="active" href="/adminPost">Posts</a></button>
            <button><a class="active" href="/adminProduct">Produtos</a></button>
        </div>

        <br>

        <div style="display: flex; text-align:center; justify-content: center; flex-wrap: wrap; gap: 1em">
            <div style="background-color:aquamarine; padding: 2%; border-radius: 6px; ">
                <h3>Total de POSTAGENS: <?php echo count($posts); ?></h3>
            </div>

            <div style="background-color:aquamarine; padding: 2%; border-radius: 6px; ">
                <h3>Total de PRODUTOS: <?php echo count($products); ?></h3>
            </div>

            <div style="background-color:aquamarine; padding: 2%; border-radius: 6px; ">
                <h3>Total de USUÁRIOS: <?php echo count($users); ?></h3>
            </div>
        </div>
        <br>
    </div>
</main>