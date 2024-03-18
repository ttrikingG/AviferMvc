<nav class="navbar">


<div class="header-midle" style="padding: 1%;">
  <img height="60" src="../../../assets/image/aviferNewLogo.png" alt=""><br>
  <b style="font-size: 10px;" class="textoLogo"> Pesca | Rações  | Aquarismo | Jardinagem | Vacinas | Aves</b>
</div>

  <div class="hamburger">&#9776;</div>
  <div class="navbar-links">
    <ul style="list-style: none;">
      <li><a href="/">Home</a></li>
      <li><a href="/about">Sobre</a></li>
      <li><a href="/post">Serviços</a></li>
      <li><a href="/product">Produtos</a></li>
      <li><a href="/contact">Contato</a></li>
      <li><a href="/register">Cadastre-se</a></li>
      <li class="dropdown"><a>Usuário</a>
        <div class="dropdown-content">
          <?php if(!logged()) : ?>
          <a href="/login">Login</a>
          <?php if($_SESSION['user_logged']) : ?>
          <a href="/logout">Logout</a>
          <?php endif; ?> 
          <?php if($_SESSION['admin_logged']) : ?>
          <a style="color: crimson" href="/adminPanel">Admin Panel</a>
          <?php endif; ?> 
        </div>
        <?php endif; ?>   
      </li>
    </ul>
  </div>
  
  <form action="" method="GET" class="search-form" style="margin-right: 1%;">
    <input type="text" name="q" placeholder="Pesquisar..." class="search-input">
    <button type="submit" class="search-button">Buscar</button>
  </form>
</nav>