<div class="row">
    <div class="leftcolumn">
      <br>
      <div >
            <h3 style="text-align:center;">Produto</h3>
            <hr>
            <div>
            <h2><?=$products->title ?></h2>
            <p ><?=$products->sub_title ?></p>
            <img style="max-width: 100%; height: 200px; width: 200px; margin: 0 auto;" src="<?='.' . $upload->path; ?>" alt="">
        
            <div>
                <p><?=$products->description ?></p>
                <img src="" alt="">
            </div>

            <button>Saiba Mais</button><br><br>

            <?php require 'icons.php';?>
            </div>
            <hr>
        </div>
    </div>
    
    <div class="rightcolumn">
      <div class="card">
        <h2>AviFer</h2>
        <img class="demo cursor" src="../../../assets/image/Avifer_fachada.jpg" style="width: 100%; height: 100px; object-fit: cover;" onclick="currentSlide(6)" alt="Aves">
        <p>Avenida Andrômeda, 2912, São José dos Campos, SP, Brazil</p>
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