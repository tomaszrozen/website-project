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
        $imie= htmlentities($_POST['imie']);
        $nazwisko= htmlentities($_POST['nazwisko']);
        $email= htmlentities($_POST['email']);
        
        $id=$_SESSION['userID'];
        $sql="UPDATE user SET imie = '$imie', nazwisko='$nazwisko', email='$email'  WHERE id = $id;";
        $result =  mysqli_query($conn, $sql);
        if(!$result)
        {
            header('Location: profil.php');
            $_SESSION['e_dane']="
            <div class='alert alert-danger alert-dismissible mt-2' role='alert'>
                Błąd
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
        }
        else
        {
            $_SESSION['imie']=$imie;
            $_SESSION['nazwisko']=$nazwisko;
            $_SESSION['email']=$email;
            header('Location: profil.php');
            $_SESSION['ok_dane']="
            <div class='alert alert-success alert-dismissible mt-2' role='alert'>
                Dane zapisane poprawnie
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
        }
    }
    mysqli_close($conn);
   
?>