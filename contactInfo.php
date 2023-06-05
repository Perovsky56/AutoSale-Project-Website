<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="300;url=logout.php" />
        <Title>AutoSprzedaż - wysłanie</Title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="icon" href="https://cdn-icons.flaticon.com/png/512/1048/premium/1048313.png?token=exp=1649863716~hmac=151b979d15b1da070e22ab2bd24899cb">
        <!-- font awesome  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php
session_start();
if(empty($_SESSION['loggedin'])){
  //redirect to login page
  header('Location: login.php');
  die;
}
?> 
        <center>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "autosprzedaz");

                if($conn === false){
                    die("ERROR: Brak połączenia." . mysqli_connect_error());
                }

                $firstname = $_REQUEST['firstname'];
                $email = $_REQUEST['email'];
                $topic = $_REQUEST['topic'];
                $text = $_REQUEST['text'];

                $sql = "INSERT INTO contact (firstname, email, topic, text) VALUES ('$firstname', '$email', '$topic', '$text')";

                if(mysqli_query($conn, $sql)){
                    echo "<h1><br><br>Formularz wysłany poprawnie.<br>"
                    . "Administrator otrzyma odpowiednią informację.<br>"
                    . "Oczekuj na kontakt mailowy.</h3>";

                    echo nl2br ("\n <h2>Imię: $firstname \n Email: $email \n Temat: $topic \n Treść: $text");
                } else {
                    echo "ERROR: Błąd przesyłania formularza."
                    . mysqli_error($conn);
                }

                mysqli_close($conn);
            ?>
                <br><br>
                <a href="./contact.php">Powrót do strony kontaktowej.</h3></a>
        </center>
    </body>
</html>