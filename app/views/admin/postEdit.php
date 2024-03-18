<div style="text-align: center;">
  <strong><a style="font-size: large;">Posts List</a></strong>
  <button><a href="/adminPost">Voltar</a></button>
  <button><a href="/adminPanel">Panel</a></button>
</div>

<br>

<table border="1" width="100%" >
  <thead style="background-color: silver;">
    <th>Titulo</th>
    <th>Subtitulo</th>
    <th>Conteúdo</th>
    <th>Data Publicação</th>
    <th>Edit</th>
    <th>Delete</th>
  </thead>

  <tbody>
  <?php foreach($posts as $post): ?>
    <tr>
      <td><?= $post->title ?></td>
      <td><?= $post->subTitle ?></td>
      <td><?= $post->content ?></td>
      <td><?= date('d M Y H:i:s', strtotime($post->created_at)) ?></td> <!-- Formatação da data -->
      <td><a href="/adminPost/edit?id=<?= $post->id; ?>">Editar</a></td>
      <td><a href="/adminPost/delete?id=<?= $post->id; ?>">Deletar</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table><br>