<?php
    session_start();
?>
<!doctype html>
<html lang="pl">
   <head>
        <?php
            include("head.html");
        ?>
        <title>Rasy</title>
    </head>
    <body> 
       <?php
            include("navbar.php");
       ?>
        <header class="jumbotron rounded-0 mb-0" id="n_rasy">
            <div class="container">
                <div class="text-center">
                    <h1>RASY</h1>
                    <p style="font-size:18px;">
                        Szukasz psa dla siebie? Nie wiesz jaką rasę wybrać?<br>
                        Sprawdź rasy psów poniżej.
                    </p>
                </div>
            </div>
        </header>

        <section class="container-fluid" style="box-shadow: inset 0px 10px 20px 0px #DBDBDB;">
            <div class="container py-4">
                <h2 class="display-4 text-center pb-4">Znajdź rasę psa</h2>
                <div class="form-group text-center">
                    <form method="get" action="rasy.php">
                        <select class="form-select" name="wybor">
                            <option selected>Wybierz rasę</option>
                            <option value="Shiba Inu">Shiba Inu</option>
                            <option value="Owczarek niemiecki">Owczarek niemiecki</option>
                            <option value="Husky syberyjski">Husky syberyjski</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-success">Wyszukaj</button>
                    </form>
                </div>
            </div>
        </section>
        
        <?php
            if(!isset($_GET['wybor']))
            {
                //Footer
                include("footer.html");
                exit;
            }
            require_once("connect.php");
            $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
            if (!$conn) {
                echo('Nie można się połączć z bazą danych'.mysqli_connect_error());
                exit;
            }
            $wybor=$_GET['wybor'];
            $sql = "SELECT * FROM rasy WHERE nazwa='$wybor';"; 
            $result = mysqli_query($conn, $sql); 
            if(!$result){
                mysqli_close($conn);
                exit;
             }
             while($row = mysqli_fetch_assoc($result)){
                echo '<article class="container">
                    <h1 class="pt-2">'.$row['nazwa'].'</h1>
                    <img src="img/'.$row['zdjecie'].'" alt="" class="img-fluid mb-2 w-100">
                    <p style="font-size:1.1em">'.$row['opis'].'</p>

                    <h2>Charakter i usposobienie</h2>
                    <p>'.$row['charakter'].'</p>  
                    <h2>Pielęgnacja</h2>
                    <p>'.$row['pielegnacja'].'</p>
                    <h2>Dla kogo?</h2>
                    <p>'.$row['dlaKogo'].'</p>         
                </article>
                ';
            }
            mysqli_close($conn);
        ?>

   <!-- Footer -->
   <?php
      include("footer.html");
    ?>
        
    </body>
</html>