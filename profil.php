<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php
            include("head.html");
        ?>
        <title>Profil</title>
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <div class="container">
            <h1 class="display-4 text-center py-4">Profil</h1>
            <h2>Twoje dane</h2>
            <form method="post" action="dane.php">
                <div class="form-group">
                    <?php
                        echo ' <label>Imię</label>';
                        echo '<input type="text" name="imie" class="form-control" value="'; if(isset($_SESSION['imie'])) echo $_SESSION['imie']; echo '">';
                    
                        echo '<label>Nazwisko</label>';
                        echo '<input type="text" name="nazwisko" class="form-control" value="'; if(isset($_SESSION['nazwisko'])) echo $_SESSION['nazwisko']; echo '">';
                        
                        echo '<label>E-mail</label>';
                        echo '<input type="email" name="email" class="form-control" value="'; if(isset($_SESSION['email'])) echo $_SESSION['email']; echo '" required="required">';
                        if(isset($_SESSION['ok_dane']))
                        {
                            echo $_SESSION['ok_dane'];
                            unset($_SESSION['ok_dane']);
                        }
                        elseif(isset($_SESSION['e_dane']))
                        {
                            echo $_SESSION['e_dane'];
                            unset($_SESSION['e_dane']);
                        }
                    ?>
                    <button type="submit" class="btn btn-info w-25 my-2">Zapisz</button>
                </div>
            </form>
            <h2>Zmień hasło</h2>
            <form method="post" action="haslo.php">
                <div class="form-group">
                    <label>Stare hasło</label>
                    <input type="password" name="stare" class="form-control" required="required">
                    <label>Nowe hasło</label>
                    <input type="password" name="nowe" class="form-control" required="required">
                    <label>Powtórz hasło</label>
                    <input type="password" name="nowe2" class="form-control" required="required">
                    <?php
                        if(isset($_SESSION['ok']))
                        {
                            echo $_SESSION['ok'];
                            unset($_SESSION['ok']);
                        }
                        elseif (isset($_SESSION['e_haslo']))
                        {
                            echo $_SESSION['e_haslo'];
                            unset($_SESSION['e_haslo']);
                        }
                    ?>
                    <button type="submit" class="btn btn-info w-25 my-2">Zmień</button>
                </div>
            </form>
        </div>
        <?php
            include("footer.html");
        ?>
    </body>
</html>