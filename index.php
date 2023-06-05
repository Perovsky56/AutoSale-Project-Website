<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300;url=logout.php" />
    <Title>AutoSprzedaż - strona główna</Title>
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
            <button type="submit" id="completed-task" class="fabutton"><i class="far fa-user"></i></button>
        </form>
        <!--<button class="btn" action="logout.php">ZALOGUJ</button>-->
    
    </div>

</header> 
    

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">znajdź samochód</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img2.png" alt="">

    <a data-speed="7" href="cars.php" class="btn home-parallax">SAMOCHODY UŻYWANE</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>150+</h3>
            <p>Zadowolonych klientów</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>350+</h3>
            <p>Sprzedanych aut</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-tools"></i>
        <div class="content">
            <h3>1700+</h3>
            <p>Obsłużonych pojazdów</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> Nowe w <span>ofercie</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/vehicle-1.png" alt="">
                <div class="content">
                    <h3>Audi R8</h3>
                    <div class="price"> <span>Cena : </span> 790,000 zł </div>
                    <p>
                        stan idealny
                        <span class="fas fa-circle"></span> 2014
                        <span class="fas fa-circle"></span> skrzynia automatyczna
                        <span class="fas fa-circle"></span> benzyna
                    </p>
                    <a href="#" class="btn">SPRAWDŹ</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>Volkswagen Passat R-Line</h3>
                    <div class="price"> <span>Cena : </span> 15 zł </div>
                    <p>
                        klepany
                        <span class="fas fa-circle"></span> 20??
                        <span class="fas fa-circle"></span> skrzynia automatyczna DSG
                        <span class="fas fa-circle"></span> benzyna
                    </p>
                    <a href="#" class="btn">SPRAWDŹ</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-3.png" alt="">
                <div class="content">
                    <h3>Audi S4</h3>
                    <div class="price"> <span>Cena : </span> 15,000 zł </div>
                    <p>
                        spod koca
                        <span class="fas fa-circle"></span> 2015
                        <span class="fas fa-circle"></span> skrzynia manualna
                        <span class="fas fa-circle"></span> diesel
                    </p>
                    <a href="#" class="btn">SPRAWDŹ</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>BMW Seria 3</h3>
                    <div class="price"> <span>Cena : </span> 12,000 zł </div>
                    <p>
                        po zalaniu
                        <span class="fas fa-circle"></span> 2006
                        <span class="fas fa-circle"></span> skrzynia manualna
                        <span class="fas fa-circle"></span> benzyna
                    </p>
                    <a href="#" class="btn">SPRAWDŹ</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-5.png" alt="">
                <div class="content">
                    <h3>BMW i8</h3>
                    <div class="price"> <span>Cena : </span> 573,900 zł </div>
                    <p>
                        nowy
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> pojemna bateria (XD)
                        <span class="fas fa-circle"></span> elektryczny (/węgiel)
                    </p>
                    <a href="#" class="btn">SPRAWDŹ</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-6.png" alt="">
                <div class="content">
                    <h3>MB GLK</h3>
                    <div class="price"> <span>Cena : </span> 120,000 zł </div>
                    <p>
                        zadbany
                        <span class="fas fa-circle"></span> 2017
                        <span class="fas fa-circle"></span> skrzynia manualna
                        <span class="fas fa-circle"></span> benzyna
                    </p>
                    <a href="#" class="btn">SPRAWDŹ</a>
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
            <a href="index.php#home"> <i class="fas fa-arrow-right"></i> Strona główna </a>
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
<script src="js/animations.js"></script>
</body>
</html>