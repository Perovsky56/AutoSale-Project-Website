<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300;url=logout.php" />
    <Title>AutoSprzedaż - kontakt</Title>
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
<button onclick="scrollingTop()" id="myBtn" title="Przewiń do góry strony"><i class="fas fa-arrow-up"></i></button>  

<header class="header">



    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.php#home" class="logo"> <span>Auto</span>Sprzedaż </a>

    <nav class="navbar">
        <a href="index.php#vehicles">Nowości</a>
        <a href="service.php">Usługi</a>
        <a href="cars.php">Samochody używane</a>
        <a href="reviews.php">Opinie</a>
        <a href="contact.php">Kontakt</a>
    </nav>

    <div id="login-btn">
    <form action="logout.php" method="post">
            <input type="submit" class="btn" name="logoutAction" value="Wyloguj" />
        </form>
        <!--<button class="btn" action="logout.php">ZALOGUJ</button>-->
    </div>

</header> 
    


<br><br><br><br><br>

<section class="newsletter">
    
    <h3>Zasubskrybuj nasz newsletter</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

   <form name="newslettering">
        <input type="email" name="email" placeholder="wpisz swój adres email">
        <input type="submit" value="subskrybuj">
   </form>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>Kontakt</span></h1>

    <div class="row">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.5460905298173!2d17.902854815901545!3d50.65412058054908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471053bb1bcdafab%3A0xf2ef41915344d5dd!2sPolitechnika%20Opolska!5e0!3m2!1spl!2spl!4v1648402001638!5m2!1spl!2spl" allowfullscreen="" loading="lazy"></iframe>

        <form name="contacting" action="contactInfo.php" method="POST">
            <h3>Skontaktuj się</h3>
            <input type="text" name="firstname" placeholder="imię" class="box">
            <input type="email" name="email" placeholder="email" class="box">
            <input type="text" name="topic" placeholder="temat" class="box">
            <textarea name="text" placeholder="treść wiadomości" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="wyślij" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>Nawigacja</h3>
            <a href="index.php"> <i class="fas fa-arrow-right"></i> Strona główna </a>
            <a href="index.php#vehicles"> <i class="fas fa-arrow-right"></i> Nowości </a>
            <a href="service.php"> <i class="fas fa-arrow-right"></i> Usługi </a>
            <a href="cars.php"> <i class="fas fa-arrow-right"></i> Samochody Używane </a>
            <a href="reviews.php"> <i class="fas fa-arrow-right"></i> Opinie </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> Kontakt </a>
        </div>

        <div class="box">
            <h3>Informacje kontaktowe</h3>
            <a href="#"> <i class="fas fa-phone"></i> +48 123 456 789 </a>
            <a href="mailto:p.siemiginowski@student.po.edu.pl"> <i class="fas fa-envelope"></i> p.siemiginowski@student.po.edu.pl </a>
            <a href="#"> <i class="far fa-user"></i> Paweł Siemiginowski </a>
            <a href="https://goo.gl/maps/MNzkY85ztzRePtgj9" target="_blank"> <i class="fas fa-map-marker-alt"></i> 45-758 Opole, Polska </a>
        </div>

        <div class="box">
            <h3>Media społecznościowe</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-telegram"></i> telegram </a>
        </div>

    </div>

    <div class="credit"> Paweł Siemiginowski (s101450) <br> PROJEKT 1 </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="js/button.js"></script>
<script src="js/swipers.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="js/form-validations.js"></script>

</body>
</html>