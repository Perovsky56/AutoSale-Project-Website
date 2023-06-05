<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <Title>AutoSprzedaż - logowanie</Title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="icon" href="https://cdn-icons.flaticon.com/png/512/1048/premium/1048313.png?token=exp=1649863716~hmac=151b979d15b1da070e22ab2bd24899cb">
        <!-- font awesome  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="content">
            <div class="login-form-container active">

                <form id="login" action="" method="post">
                    <h3>LOGOWANIE</h3>
                    <p>Musisz się zalogować, aby móc skorzystać z naszej strony.</p>
                    <input required type="text" placeholder="nazwa użytkownika" name="Name" id="UserID" class="box">
                    <input required type="password" placeholder="hasło" name="password" id="PIN" class="box">
                    <p> Zapomniałeś hasła? <a href="#">Naciśnij tutaj!</a> </p>
                    <input type="submit" value="ZALOGUJ" class="btn">
                    <p> Nie masz konta? <a href="#">Załóż je!</a> </p>
                </form>

            </div>
            <td>&nbsp;</td>

            <div>
                <?php
                    session_start();

                    $conn = mysqli_connect("localhost", "root", "", "autosprzedaz");
                    if($conn === false){
                    die("ERROR: Nie można się połączyć.. " . mysqli_connect_error());
                    }

                    if(!empty($_POST['Name']) && (!empty($_POST['password']))){
                    $UserName = $_POST['Name'];
                    $PIN = $_POST['password'];

                    $search = mysqli_query($conn,"SELECT * FROM login WHERE UserName='".$UserName."' AND PIN='".$PIN."'") or die(mysql_error()); 
                    $match  = mysqli_num_rows($search);

                    if($match > 0){
                        $_SESSION['loggedin'] = true;
                        header('Location: index.php');
                    }
                    else{
                        echo 'Błąd logowania.';
                        header('Location: login.php');
                    }
                    }
                            

                ?>
                
            </div>
        </div>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <script src="js/script.js"></script>
        <script src="js/button.js"></script>
        <script src="js/swipers.js"></script>
    </body>
</html>