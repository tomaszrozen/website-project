<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php
            include("head.html");
        ?>
        <link rel="stylesheet" href="./css/galeria.css">
        
        <title>Galeria</title>
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <div class="container py-2">
            <h1 class="display-4 text-center pb-4">Galeria</h1>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                <figure>
                    <img src="img/card2.jpg" alt="" onclick="openModal();currentSlide(1)" class="hover-shadow img-fluid">
                </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/husky.jpg" alt="" onclick="openModal();currentSlide(2)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/shiba.jpg" alt="" onclick="openModal();currentSlide(3)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/szkol1.jpg" alt="" onclick="openModal();currentSlide(4)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/5.jpg" alt="" onclick="openModal();currentSlide(5)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/piesy3.jpg" alt="" onclick="openModal();currentSlide(6)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/glaskanie.jpg" alt="" onclick="openModal();currentSlide(7)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/card3.jpg" alt="" onclick="openModal();currentSlide(8)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/1.jpg" alt="" onclick="openModal();currentSlide(9)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/2.jpg" alt="" onclick="openModal();currentSlide(10)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/3.jpg" alt="" onclick="openModal();currentSlide(11)" class="hover-shadow img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6">
                    <figure>
                        <img src="img/4.jpg" alt="" onclick="openModal();currentSlide(12)" class="hover-shadow img-fluid">
                    </figure>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content-g">
                <div class="mySlides">
                    <img src="img/card2.jpg" alt="" style="width:100%;">
                </div>
                <div class="mySlides">
                    <img src="img/husky.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/shiba.jpg" alt="" style="width:100%" >
                </div>
                <div class="mySlides">
                    <img src="img/szkol1.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/5.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/piesy3.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/glaskanie.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/card3.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/1.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/2.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/3.jpg" alt="" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="img/4.jpg" alt="" style="width:100%">
                </div>

                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <script src="galeria.js"></script>
        <?php
            include("footer.html");
        ?>
    </body>
</html>
