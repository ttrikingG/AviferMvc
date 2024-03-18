<div style="margin: 2%;">
  <strong><h3 style="text-align:center;">SERVIÇOS</h3></strong>
  <?php foreach($posts as $post):?>
    <hr>
    <h2><?=$post->title ?></h2>
    <h3><?=$post->subTitle ?></h3>
    <p><?=$post->content ?></p>

  <?php require 'icons.php';?>
    <td><?= date('d M Y H:i:s', strtotime($post->created_at)) ?></td>
  <?php endforeach;?>
  <hr>
</div>

<div style="text-align: center;">
  <?=$links;?>
</div>
<br>