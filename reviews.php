<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300;url=logout.php" />
    <Title>AutoSprzedaż - opinie</Title>
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


<section class="reviews" id="reviews">

    <h1 class="heading"> <span>Opinie</span> klientów </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/man.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Jan Kowalski</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/woman.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Agnieszka Nowak</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/man.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Krzysztof Nowak</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/woman.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Krystyna Kowalska</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/man.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Ireneusz Nowak</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/woman.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>Paulina Kowalska</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

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
</body>
</html>