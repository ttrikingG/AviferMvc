<div style="margin: 5%;">
  <strong><h3 style="text-align:center;">Post:<?=$posts->id;?></h3></strong>
    <h2><?=$posts->title ?></h2>
    <h3><?=$posts->subTitle ?></h3>
    <p><?=$posts->content ?></p>
    
  <?php require 'icons.php';?>
    <td><?= date('d M Y H:i:s', strtotime($post->created_at)) ?></td>
    <hr>
</div>