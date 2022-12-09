<?php
    session_start();
    require_once("connect.php");
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
    if(!$conn) {
        echo('Nie można połączyć z bazą danych' . mysqli_connect_error());
        exit;
    }
    if(!isset($_SESSION['user']))
    {
        header('Location: index.php');
    }
    else
    {
        $stare = $_POST['stare'];
        $nowe= $_POST['nowe'];
        $nowe2= $_POST['nowe2'];
        if($_SESSION['haslo'] === $stare)
        {
            if ((strlen($nowe)<6) || (strlen($nowe)>20))
            {
                header('Location: profil.php');
                $_SESSION['e_haslo']="
                <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                    Hasło musi posiadać od 6 do 20 znaków
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
            }
            if ($nowe!=$nowe2)
            {
                header('Location: profil.php?');
                $_SESSION['e_haslo']="
                <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                    Podane hasła nie są identyczne
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
            }
            if ((strlen($nowe)>6) && (strlen($nowe)<20) && $nowe == $nowe2)
            {
                $id=$_SESSION['userID'];
                $nowe=htmlentities($nowe);
                $sql="UPDATE user SET haslo = '$nowe' WHERE id = $id;";
                $result =  mysqli_query($conn, $sql);
                if(!$result)
                {
                    header('Location: profil.php');
                    $_SESSION['e_haslo']="
                    <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                        Błąd
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
                }
                else{
                    $_SESSION['haslo']=$nowe;
                    header('Location: profil.php');
                    $_SESSION['ok']="
                    <div class='alert alert-success alert-dismissible mt-2' role='alert'>
                        Hasło zostało zmienione
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
                }
            }
        }
        else
        {
            header('Location: profil.php');
            $_SESSION['e_haslo']="
            <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                Podane błędne aktualne hasło
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
        }
    }
    mysqli_close($conn);
?>