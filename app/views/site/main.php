<main>
  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="../../../assets/image/bannerAviferPesca1280px2.png" style="width: 100%; height: 200px; object-fit: cover;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="../../../assets/image/bannerAviferRacao.png" style="width: 100%; height: 200px; object-fit: cover;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="../../../assets/image/interior_loja2.jpg" style="width: 100%; height: 200px; object-fit: cover;">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="../../../assets/image/interior_loja5.jpg" style="width: 100%; height: 200px; object-fit: cover;">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="../../../assets/image/interior_loja7.jpg" style="width: 100%; height: 200px; object-fit: cover;">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="../../../assets/image/interior_loja9.jpg" style="width: 100%; height: 200px; object-fit: cover;">
    </div>
      
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
      <div class="column">
        <img class="demo cursor" src="../../../assets/image/pesca.png" style="width: 100%; height: 80px; object-fit: cover;" onclick="currentSlide(1)" alt="Pesca">
      </div>
      <div class="column">
        <img class="demo cursor" src="../../../assets/image/racao.png" style="width: 100%; height: 80px; object-fit: cover;" onclick="currentSlide(2)" alt="Rações">
      </div>
      <div class="column">
        <img class="demo cursor" src="../../../assets/image/aquario.png" style="width: 100%; height: 80px; object-fit: cover;" onclick="currentSlide(3)" alt="Aquarismo">
      </div>
      <div class="column">
        <img class="demo cursor" src="../../../assets/image/jardinagem.png" style="width: 100%; height: 80px; object-fit: cover;" onclick="currentSlide(4)" alt="Jardinagem">
      </div>
      <div class="column">
        <img class="demo cursor" src="../../../assets/image/vacina.png" style="width: 100%; height: 80px; object-fit: cover;" onclick="currentSlide(5)" alt="Vacinas">
      </div>    
      <div class="column">
        <img class="demo cursor" src="../../../assets/image/ave.png" style="width: 100%; height: 80px; object-fit: cover;" onclick="currentSlide(6)" alt="Aves">
      </div>
    </div>
  </div>

  
      <div class="carousel" style="display: flex; justify-content: center;">
        <?php foreach($products as $product) : ?>
          <div class="card-product">
            <?php foreach($product->images as $image): ?>
            <img class="card-image" src="<?= $image->path ?>" alt="Product Image">
            <?php endforeach; ?>
            <h3 class="card-title"><?=$product->title ?></h3>
            <p class="card-text"><?=$product->sub_title ?></p>
            <p style="color: blue;">R$:<?=$product->price ?>,00</p>
            <button><a href="/product/show?id=<?= $product->id; ?>">Ver produto</a></button>  
          </div>
        <?php endforeach; ?>
      </div>

  <div class="row">
  <div class="leftcolumn">
    <br>
      <div class="container-banner">
       <div class="banner">
          <img src="../../../assets/image/crownBanner2.png" alt="">
       </div>

       <div class="banner">
          <img src="../../../assets/image/crownBanner2.png" alt="">
       </div>

       <div class="banner">
          <img src="../../../assets/image/crownBanner2.png" alt="">
       </div>

       <div class="banner">
          <img src="../../../assets/image/crownBanner2.png" alt="">
       </div>
      </div>

      

      <br>

      <div class="menupdt">
        <div class="gallery-container">
          <?php foreach($products as $product) : ?>
          <div class="gallery-container-product">
          <?php foreach($product->images as $image): ?>
          <img  src="<?= $image->path ?>" alt="">
          <?php endforeach; ?>
          <h4><?=$product->title ?></h4>
          <p><?=$product->sub_title ?></p>
          <p style="color: blue;">R$:<?=$product->price ?>,00</p>
          <button><a href="/product/show?id=<?= $product->id; ?>">Ver produto</a></button>  
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <br>

    </div>
    
    <div class="rightcolumn">
      <div class="card">
        <h2>AviFer</h2>
        <img class="demo cursor" src="../../../assets/image/Avifer_fachada.jpg" style="width: 100%; height: 100px; object-fit: cover;" onclick="currentSlide(6)" alt="Aves">
        <p>Avenida Andrômeda, 2912, São José dos Campos, SP, Brazil</p>
      </div>
      
      <div class="card">
        <h3>Serviços</h3>
        <?php foreach($posts as $post):?>
          <hr>
          <h2><?=$post->title ?></h2>
          <h3><?=$post->subTitle ?></h3>
          <button><a href="/post/show?id=<?= $post->id; ?>">Detalhes</a></button><br><br>
          <?php require 'icons.php';?>
          <td><?= date('d M Y H:i:s', strtotime($post->created_at)) ?></td>
          <?php endforeach;?>
        </div>
        
        <div class="card">
          <h3>Social Midia</h3>
          <p>Some text..</p>
        </div>

        <div class="card">
          <a name="local-anchor"></a>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.134928843831!2d-45.88738508555566!3d-23.238176584844307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4ab874d8cea7%3A0x25211930bdfbf1d7!2sAvifer%20Com%C3%A9rcio%20de%20Aves%20e%20Ra%C3%A7%C3%B5es%2C%20material%20de%20pesca%2C%20jardinagem%2C%20vacina%2C%20medicamentos%20entre%20outros...!5e0!3m2!1spt-BR!2sbr!4v1680893263236!5m2!1spt-BR!2sbr"
          margin="auto" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
</main>
  