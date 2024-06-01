<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/slider.css">
  <title>Domov</title>




</head>

<body style="background-color: #2e2e2e" >
  <!--Cookies- bonusový bod-->

  <div class="cookie-container">
    <p>
      Kliknutím na "Súhlasím" vyjadrujete súhlas s používaním súborov cookie na našom webe, na sociálnych médiách a na
      stránkach našich partnerov za účelom vylepšenia a prispôsobenia nášho obchodu a na analytické a marketingové
      účely.
    </p>

    <button class="cookie-btn">
      Súhlasím
    </button>
  </div>




  <!--Header s navbarom-->
  <?php include "./parts/header.php"?>
  

  <!--Main-->
  <main>
    <section class="home">

      <div class="home-content">
        <h1>SCUDERIA FERRARI</h1>
        <h3>"Beyond Imagination"</h3>
        <p>Scuderia Ferrari je taliansky automobilový tím formuly 1, ktorý založil Enzo Ferrari v roku 1929 v mestečku
          Maranello. (Scuderia znamená stajňa.) Súčasným prezidentom pretekárskeho oddelenia spoločnosti Ferrari je
          Louis Camilleri.

          Symbolom Ferrari je čierny vzpínajúci sa kôň na žltom poli. Scuderia Ferrari pretekala od svojho založenia až
          do roku 1939 (10 rokov) pre značku Alfa Romeo a až v roku 1948 sa objavuje na pretekoch formuly 1 ako značka
          Ferrari s vozidlom F 125.

          História stajne je fascinujúca a Scuderia Ferrari je so ziskom 15. titulov majstra sveta formuly 1 a 16.
          titulov Majstrovstiev sveta konštruktérov F1 najúspešnejším tímom.</p><br>
        <h1>Úspechy ferrari</h1><br>
        <h3>2004</h3>
        <p>
          Roky 2000 až 2004 boli úplne v znamení dominancie tímu Ferrari a Michaela Schumachera, ktorému po celú túto
          dobu stál po boku tímový kolega Rubens Barrichello. Úplne vypovedajúcim výsledkom je päť jazdeckých a päť
          konštruktérskych titulov za víťazstvo v majstrovstvách sveta. Počas týchto rokov Ferrari aj Michael Schumacher
          znateľne prekonali mnoho rekordov formuly 1, od počtu majstrovských titulov, cez počet víťazstiev v grand
          prix, kvalifikáciách, počet najrýchlejších kôl až po neprerušené série vyhraných pretekov či pretekov na
          stupňoch víťazov.
        </p>
        <h3>2007</h3><br>
        <p>
          Do tímu prišiel miesto Michalea Schumachera Kimi Räikkonen od McLarenu, Felipe Massa v tíme pokračoval po jeho
          boku. Nové vozidlo bolo tajne odhalené, bez pozvania fotografov, 14. januára a hneď na druhý deň sa
          pokračovalo v testovaní. Počas predsezónneho testovania sa nové vozidlo F2007 rýchlo zlepšovalo a bolo vždy na
          čele pri rôznych spoločných testoch všetkých tímov formuly 1. Na konci sezóny vyhral Kimi Raikkonen šampionát
          a bol posledným šampiónom Ferrari. <br>
          Pre viac info prejdite na našu hlavnú stránku:
        </p>
        <a href="https://www.ferrari.com/en-EN/formula1" target="_blank" class="btn">Hlavná stránka</a>



      </div>

      <div class="home-img">
        <img src="img/f1.png" alt="">
      </div>
    </section>
    <br><br>
    

    <div class="row">
      <div class="col-sm-12 col-md-6 pb-0 mb-0">
        <section class="slider">
          <div id="carouselExampleCaptions1" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/schumislider.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">

                  <p>Michael Schumacher v najúspešnejšom Ferrari vôbec, Ferrari F2004.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/Vettelslider.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">

                  <p>Sebastian Vettel v jeho Ferrari SF71H</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/monacoslider.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">

                  <p>Vintage fotka Ferrari z Monaca</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </section>
      </div>
      <div class="col-sm-12 col-md-6 pt-0 mt-0">
        <section class="slider">
          <div id="carouselExampleCaptions2" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slider 33.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">


                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slider 2 1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">


                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slider 33.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">


                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

        </section>
      </div>
    </div>



  </main>

  <!--footer-->
  <?php include "./parts/footer.php"?>


  <script src="js/app.js" defer></script>
</body>

</html>