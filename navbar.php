<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-info">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="95" height="40" class="d-inline-block" alt="" id="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainmenu">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link" href="index.php">STRONA GŁÓWNA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rasy.php">RASY PSÓW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeria.php">GALERIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="szkolenia.php">SZKOLENIA</a>
            </li>
        </ul>
        <?php
            if(isset($_SESSION['user']))
            {
                echo('<div class="dropdown">
                    <a class="nav-link dropdown-toggle" style="margin-right:2rem;" type="button" data-toggle="dropdown">
                        <span style="font-size:20px;"><i class="bi bi-person-circle mr-2 align-center" ></i>'. $_SESSION['user'].'</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profil.php">Ustawienia profilu</a>
                        <a class="dropdown-item" href="wylogowywanie.php">Wyloguj się</a>
                    </div>
                </div>');
            }
            else
            {
            echo('
                <!--Zaloguj się-->
                <div>
                    <button class="btn btn-sm btn-info font-weight-bold log" data-toggle="modal" data-target="#logowanie">Zaloguj się</button>
                </div>
                <div class="modal fade" id="logowanie">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Zaloguj się</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="logowanie.php">
                                    <div class="form-group">
                                        <label>Login</label>
                                        <input type="text" name="login" class="form-control" placeholder="login">
                                    </div>
                                    <div class="form-group">
                                        <label>Hasło</label>
                                        <input type="password" name="haslo" class="form-control" placeholder="hasło">
                                    </div>'); 
                                    if(isset($_SESSION['blad']))
                                    {
                                        echo "<script>
                                        $(document).ready(function(){
                                        $('#logowanie').modal('show');
                                        });
                                    </script>";
                                        echo $_SESSION['blad'];
                                        unset($_SESSION['blad']);
                                    }
                                    echo('
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info">Zaloguj się</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Zarejestruj się-->
                <div>
                    <button class="btn btn-sm btn-info font-weight-bold log" data-toggle="modal" data-target="#rejestracja">Zarejestruj się</button>
                </div>
                <div class="modal fade" id="rejestracja">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Zarejestruj się</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="rejestracja.php">
                                    <div class="form-group">
                                        Login
                                        <input type="text" class="form-control" name="login" placeholder="login" required="required">
                                    </div>
                                    <div class="form-group">
                                        Hasło
                                        <input type="password" name="haslo" class="form-control" placeholder="hasło" required="required">
                                    </div>
                                    <div class="form-group">
                                        Powtórz hasło
                                        <input type="password" name="haslo2" class="form-control" placeholder="hasło" required="required">
                                    </div>
                                    <div class="form-group">
                                        Email
                                        <input type="email" class="form-control" name="email" placeholder="e-mail" required="required">
                                    </div>');
                                    if(isset($_SESSION['e_login']) || isset($_SESSION['e_haslo']) || isset($_SESSION['e_rejestracja']))
                                    {
                                        echo"
                                        <script>
                                            $(document).ready(function(){
                                            $('#rejestracja').modal('show');
                                            });
                                        </script>";
                                        if(isset($_SESSION['e_login']))
                                        {
                                            echo $_SESSION['e_login'];
                                            unset($_SESSION['e_login']);
                                        }
                                        if(isset($_SESSION['e_haslo']))
                                        {
                                            echo $_SESSION['e_haslo'];
                                            unset($_SESSION['e_haslo']);
                                        }
                                        if(isset($_SESSION['e_rejestracja']))
                                        {
                                            echo $_SESSION['e_rejestracja'];
                                            unset($_SESSION['e_rejestracja']);
                                        }
                                    }
                                    echo('
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info">Zarejestruj się</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                ');
            }
            
        ?>
    </div>
</nav>