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
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $haslo2 = $_POST['haslo2'];
        $email = $_POST['email'];
        
        if((strlen($login)<3) || (strlen($haslo1)>20))
        {
            header('Location: index.php');
            $_SESSION['e_login']="
            <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                    Hasło musi posiadać od 3 do 20 znaków
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
            exit;
        }
        if ((strlen($haslo)<6) || (strlen($haslo1)>20))
		{
            header('Location: index.php');
			$_SESSION['e_haslo']="
            <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                    Hasło musi posiadać od 6 do 20 znaków
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
            exit;
        }
		if ($haslo!=$haslo2)
		{
            header('Location: index.php');
			$_SESSION['e_haslo']="
            <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                Podane hasła nie są identyczne
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
            exit;
		}
        $login=htmlentities($login);
        $sql = "select * from user where login = '$login'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)
        {
            header('Location: index.php');
            $_SESSION['e_login']="
            <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                    Użtkownik o podanym loginie już istnieje!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
            exit;
        }
        else
        {
            $email=htmlentities($email);
            $haslo=htmlentities($haslo);
            $sql = "insert into user(login, haslo, email) values('$login', '$haslo', '$email')";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $sql2 = "select * from user where login = '$login'";
                $result2 = mysqli_query($conn, $sql2);
                $rekord = mysqli_fetch_assoc($result2);
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
                $_SESSION['e_rejestracja']="
                <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                        Błąd rejestracji
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
            }
        }
    }
    mysqli_close($conn);

?>