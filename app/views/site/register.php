<div class="form-wrapper">
    <form class="form-cadastro"  action="/register/store" method="POST">
        <img width="180" src="../../../assets/image/Avifer-logo2.png" alt="">
        <h2>Cadastro</h2>
        <input type="text" placeholder="Nome" name="firstName"><?php echo message('firstName')?>
        <input type="text" placeholder="Sobrenome" name="lastName"> <?php echo message('lastName')?>
        <input type="text" placeholder="E-mail" name="email"><?php echo message('email')?> 
        <input type="text" placeholder="Senha" name="password"><?php echo message('password')?>
        <button type="submit">Cadastrar</button><br>
    </form>
</div>