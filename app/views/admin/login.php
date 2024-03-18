<div class="container" style="text-align: center; display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">
  <div style="background-color: yellow; padding: 2%; border-radius: 8px; box-shadow: black 2px 2px 4px;">
  <img width="200" src="../../../assets/image/Avifer-logo2.png" alt="">
  <h2>Enter Admin Login</h2>
    
    <form action="/adminLogin/store" method="POST">
      <input type="text" placeholder="E-mail" name="email"><br><br>
      <?php echo message('email')?>
      <input type="text" placeholder="Senha" name="password"><br><br>
      <?php echo message('password')?>
      
      <button type="submit">Logar</button><br><br>
      <?php echo message('login')?>
      <a href="/">Voltar</a>
    </form>
  </div>
</div>

