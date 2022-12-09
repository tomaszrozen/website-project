<?php
    session_start();
?>
<!doctype html>
<html lang="pl">
    <head>
        <?php
            include("head.html");
        ?>
        <title>Strona główna</title>
    </head>
    <body>
       <?php
            include("navbar.php");
       ?>
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1" class=""></li>
              <li data-target="#carousel" data-slide-to="2" class=""></li>
        </ol>
          <div class="carousel-inner">
              <div class="carousel-item item-1 active">
                  <div class="container">
                      <div class="carousel-caption napisy">
                          <h2>Dołącz teraz</h2>
                          <p>Kilkinij przyciks poniżej i się zarejestruj.</p>
                          <p><a class="btn btn-md btn btn-info" data-toggle="modal" data-target="#rejestracja" role="button">Zarejstruj się</a></p>
                      </div>
                  </div>
              </div>
              <div class="carousel-item item-2">
                  <div class="container">
                      <div class="carousel-caption napisy">
                          <h2>Szkolenia psów.</h2>
                          <p> Niezależnie od tego, czy masz młodego szczeniaka, starszego psa czy ratownika, zajęcia szkoleniowe mogą pomóc im nauczyć się zachowywać odpowiednio w domu i poza nim</p>
                          <p><a class="btn btn-md btn-info" href="szkolenia.php" role="button">Czytaj więcej</a></p>
                      </div>
                  </div>
              </div>
              <div class="carousel-item item-3">
                  <div class="container">
                      <div class="carousel-caption napisy">
                          <h2>Galeraia.</h2>
                          <p>Zobacz mnóstwo różnych piesków </p>
                          <p><a class="btn btn-md btn-info" href="galeria.php" role="button">Zobacz galerię</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" data-slide="prev" style="background-image: linear-gradient(to left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%)">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#carousel" data-slide="next" style="background-image: linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%)">
            <span class="carousel-control-next-icon" ></span>
          </a>
      </div>
      <div class="container-fluid py-5 bg-white" style="box-shadow: inset 0px 10px 20px 0px #DBDBDB;">
        <div class="container">
          <div class="row d-flex align-items-center">
            <img src="img/opis.jpg" alt="" class="rounded col-md-3">
            <p class="col-md-9" id="opis"> 
              Na planecie jest mniej więcej miliard psów.
              Chociaż psy i ludzie istnieją obok siebie od dziesiątków tysięcy lat, eksperci twierdzą, że 85 procent psów na świecie to zdziczałe.
              Wędrując po ulicach i wioskach, te kły nie są udomowionymi zwierzętami domowymi, ale wciąż przebywają w ludzkich siedliskach.
              Kiedy szczenięta mają od dwóch do trzech miesięcy, ich matki opuszczają je z wielu powodów. Ponieważ nie ma matki, która by na nie uważała, śmiertelność niemowląt poniżej jednego roku wzrasta do około 90 procent.
              Tak więc tylko około 10 procent bez matek, bezdomnych szczeniąt przeżywa.
            </p>
          </div>
        </div>
      </div>
      <section id="services" class="container">
          <h2 class="display-4 text-center mt-5 mb-3">Dlaczego warto mieć psa?</h2>
          <div class="row text-center">
          <!--1 karta --> 
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/glaskanie.jpg" alt="">
                    <div class="card-body">
                      <h4 class="card-title h-10">Głaskanie psa obniża ciśnienie krwi</h4>
                      <p class="card-text text-left">
                        Badanie 369  osób, które przeszły atak serca wykazało, że wśród osób, które miały psa zmniejszyło się prawdopodobieństwo śmierci w rok po przebytym zawale.
                        Gazeta The British Medical Journal napisała, że zwierzęta często działają jako „społeczny katalizator”.
                        Szczególnie jest to ważne dla tych, którym grozi ryzyko społecznej izolacji, czyli dla osób starszych lub dla tych z niepełnosprawnością ruchową.
                      </p>
                    </div>
                </div>
              </div>
            <!--2 karta --> 
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/card2.jpg" alt="">
                    <div class="card-body">
                      <h4 class="card-title">Lojalny przyjaciel</h4>
                          <p class="card-text text-left">
                            Nie bez powodu mówi się, że pies jest najlepszym przyjacielem człowieka.
                            Tak po prostu jest i nic tego nie zmieni.
                            Nawet jeśli człowiek nie pozostaje najlepszym przyjacielem dla swojego psa, ten drugi zawsze próbuje dać z siebie sto procent miłości, czułości i przyjaźni.
                          </p>
                    </div>
                </div>
              </div>
              <!--3 karta --> 
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="img/card3.jpg" alt="">
                    <div class="card-body">
                      <h4 class="card-title">Najlepszy Obrońca</h4>
                      <p class="card-text text-left">
                        Oprócz tego, że przeszkolony pies może obronić Cię przed przykrymi skutkami nagłego i niespodziewanego pogorszenia stanu zdrowia, ten sam psiak może obronić Cię przed zagrożeniem fizycznym.
                        Wiele oczywiście zależy tutaj od rasy. Badania dowodzą, że nie zawsze ten największy pies będzie też największym i najskuteczniejszym obrońcą.
                      </p>
                    </div>
                </div>
              </div>
          </div>
      </section>

      <div class="container-fluid text-white" style="background-color: #e84393; background-image: linear-gradient(315deg, #e84393 0%, #000000 74%);">
        <div class="container">
          <h3 class="display-3 pb-3 pt-3 text-center">Jak zajmować się psem?</h3>
          <div class="row pb-3 "> 
            <div class="col-md-8">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZdBf8HPHcKU"></iframe>
              </div>
            </div>
            <div class="col-md-4">
              <p style="font-size:1.1em;" > 
                Podstawowym elementem właściwej opieki nad psem jest odpowiednie karmienie i podawanie mu kompletnego, zbilansowanego pożywienia.
                Wygodnym dla opiekuna i zdrowym dla zwierzęcia rozwiązaniem jest stosowanie gotowych pokarmów pełnoporcjowych, które zaspokajają wszystkie potrzeby żywieniowe czworonoga.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php
        include("footer.html");
      ?>
      <script>
        $('.carousel').carousel({
        interval: 7000
        });
      </script>
    </body>
</html>