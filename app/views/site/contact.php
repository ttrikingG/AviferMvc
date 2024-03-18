<div class="form-wrapper">
    <form class="form-cadastro" action="" method="POST" role="form">
        <img width="180" src="../../../assets/image/Avifer-logo2.png" alt="">
        <h3 style="text-align: center;">Contato</h3>
        <input style="width: 100%;" type="text" class="form-control" name="" placeholder="Titulo"><?php echo message('title')?>
        
        <input style="width: 100%;" type="text" class="form-control" name="" placeholder="Assunto">  <?php echo message('subTitle')?>

        <textarea style="width: 100%;"  rows="10" class="form-control" name="" placeholder="Escreva sua mensagem..."></textarea><br><?php echo message('content')?>

        <button type="submit">Fazer o Post</button>
    </form>
</div>