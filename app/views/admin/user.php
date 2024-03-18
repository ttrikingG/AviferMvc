<div style="text-align: center;">
  <strong><a style="font-size: large;">User List</a></strong>
  <button><a href="/adminPanel">Voltar</a></button>
</div>

<br>

<h3>Total de Usuários: <?php echo count($users); ?></h3>

<table border="1" width="100%" >
  <thead style="background-color: silver;">
    <th>id</th>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>Email</th>
    <th>Senha</th>
    <th>Data</th>
    <th>Edit</th>
    <th>Delete</th>
  </thead>

  <tbody>
    <?php foreach($users as $user):?>
    <tr>
      <td><?=$user->id ?></td>
      <td><?=$user->firstName ?></td>
      <td><?=$user->lastName ?></td>
      <td><?=$user->email ?></td>
      <td><?=$user->password ?></td>
      <td><?= date('d M Y H:i:s', strtotime($user->created_at)) ?></td>
      <td><a href="/user_edit?id=<?=$user->id;?>">Editar</a></td>
      <td><a href="/user_destroy?id=<?=$user->id; ?>">Deletar</a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>

<br>