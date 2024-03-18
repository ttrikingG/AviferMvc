<div style="text-align: center;">
  <strong><a style="font-size: large;">Lista de produtos</a></strong>
  <button><a href="/adminProduct">Voltar</a></button>
  <button><a href="/adminPanel">Panel</a></button>
</div>

<br>

<table border="1" width="100%" >
  <thead style="background-color: silver;">
    <th>id</th>
    <th>Categoria</th>
    <th>Titulo</th>
    <th>Sub Titulo</th>
    <th>Description</th>
    <th>Price<th>
    <th>Edit</th>
    <th>Delete</th>
  </thead>

  <tbody>
    <?php foreach($products as $product):?>
    <tr>
      <td><?=$product->id ?></td>
      <td><?=$product->categoria ?></td>
      <td><?=$product->title ?></td>
      <td><?=$product->sub_title ?></td>
      <td><?=$product->description ?></td>
      <td><?=$product->price ?></td>
      <td><?= date('d M Y H:i:s', strtotime($product->created_at)) ?></td>

      <td><a href="/adminProduct/edit?id=<?=$product->id;?>">Editar</a></td>
      <td><a href="/adminProduct/delete?id=<?=$product->id; ?>">Deletar</a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>

<br>