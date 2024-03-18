<h3 style="text-align: center;">PRODUTOS</h3>

<table>
    <thead>
        <tr style="background-color: darkgray; color: snow;">
            <th>Foto</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ver</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $product) : ?>
            <tr>
                <td>
                    <?php foreach($product->images as $image): ?>
                        <img style="width: 40px; height: 40px;" src="<?= $image->path ?>" alt="Imagem do Produto">
                    <?php endforeach; ?>
                </td>
                <td><h3><?= $product->sub_title ?></h3></td>
                <td><p style="color: blue;">R$ <?= $product->price ?></p></td>
                <td style="text-align: center;"><a href="/product/show?id=<?= $product->id; ?>"><img width="20" src="../../../assets/image/espiar.png" alt="Ver Produto"></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<!-- botões de paginação -->
<div style="text-align: center;">
    <?= $links; ?>
</div>

<br>