<div class="form-wrapper">
  <form  class="form-cadastro" action="/login/store" method="POST">
      <img width="180" src="../../../assets/image/Avifer-logo2.png" alt="">
      <h2>Login</h2>
      <input type="text" placeholder="E-mail" name="email"><?php echo message('email')?>
      
      <input type="text" placeholder="Senha" name="password">  <?php echo message('password')?>
    
      <button type="submit">Logar</button><?php echo message('login')?>
    </form>
</div>