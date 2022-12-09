<?php
    session_start();
    require_once("connect.php");
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
    if(!$conn) {
        echo('Nie można połączyć z bazą danych' . mysqli_connect_error());
        exit;
    }
    if(isset($_SESSION["user"]))
    {
        header('Location: index.php');
    }
    else
    {
        $login = htmlentities($_POST['login']);
        $haslo = htmlentities($_POST['haslo']);
        $sql= "SELECT * FROM user WHERE login='$login' AND haslo ='$haslo';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)
        {
            $rekord = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $rekord['login'];
            $_SESSION['haslo'] = $rekord['haslo'];
            $_SESSION['userID'] = $rekord['id'];
            $_SESSION['imie'] = $rekord['imie'];
            $_SESSION['nazwisko'] = $rekord['nazwisko'];
            $_SESSION['email'] = $rekord['email'];
            header('Location: index.php');
        }
        else
        {
            header('Location: index.php');
            $_SESSION['blad']="
            <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                Nieprawidłowy login lub hasło!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
        }
    }
    mysqli_close($conn);

?>