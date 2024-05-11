<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="./resources/img/favicon.ico">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    <title>quantrimaytinh</title>
</head>

<body>
    <header id="home">
        <nav>
            <a href="#home"><img src="{{asset('img/logo1.png')}}" alt="logo" class="logo"></a>
            <ul class="main-nav"> 
                <!-- <li><a href="#home">Trang chủ</a></li>-->
                <li><a href="#about-ID">Giới thiệu</a></li>
                <li><a href="#sport-ID">Game nổi bật</a></li>
                <li><a href="#game-ID">Thể loại</a></li>
                <li><a href="#quote-ID">About</a></li>
                <li><a href="#football-ID">Phần mềm</a></li>
                <li><a href="#contract-ID">Liên hệ</a></li>
            </ul>
        </nav>

        
    </header>

    <!--Anh nen dau trang-->
    <div class="header-background">
            
    </div>

    <!-- Game nổi bật-->
    <section id="sport-ID" class="sport-section">
        <div class="row">
            <h2>Game nổi bật</h2>
        </div>
        <div class="row"> 
            <div class="sport">               
                <div class="col span-1-of-4 sport-image">
                    <img class="" src="{{asset('img/gta5.jpg')}}" alt="">
                    <p class="sport-title">
                        GTA 5
                    </p>
                </div>
                <div class="col span-1-of-4 sport-image">
                    <img class="" src="{{asset('img/assassins-creed.jpg')}}" alt="">
                    <p class="sport-title">
                        Assassins Creed
                    </p>
                </div>
                <div class="col span-1-of-4 sport-image">
                    <img class="" src="{{asset('img/far-cry-3.jpg')}}" alt="">
                    <p class="sport-title">
                        Farcry 3
                    </p>
                </div>
                <div class="col span-1-of-4 sport-image">
                    <img class="" src="{{asset('img/fallout-4.jpg')}}" alt="">
                    <p class="sport-title">
                        Fallout 4
                    </p>
                </div>
            </div>
        </div>
    </section>

    
    

    <!--ALL GAME-->
    <section id="game-ID" class="game-section">
        <div class="row">
            <h2>All game</h2>
        </div>
        <!--HANG 1-->
        <div class="row"> 
            <div class="game">               
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/far-cry-3.jpg')}}" alt="">
                    <p>Farcry</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/saints-row-3.png')}}" alt="">
                    <p>Saints row</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/Half-Life-2.jpg')}}" alt="">
                    <p>Half life</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/PES-2021.jpg')}}" alt="">
                    <p>PES</p>
                </div>
            </div>
        </div>
        <!--HANG 2-->
        <div class="row"> 
            <div class="game">               
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/gta5.jpg')}}" alt="">
                    <p>Grand Theft Auto</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img//mafia2.jpg')}}" alt="">
                    <p>Mafia</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/Red-alert-2.jpeg')}}" alt="">
                    <p>Red Alert</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/de che.jpg')}}" alt="">
                    <p>Age Of Empires</p>
                </div>
            </div>
        </div>
        <!--HANG 3-->
        <div class="row"> 
            <div class="game">               
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/fallout-4.jpg')}}" alt="">
                    <p>Fallout</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/sherlock-holmes.jpg')}}" alt="">
                    <p>Sherlock Holmes</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/assassins-creed.jpg')}}" alt="">
                    <p>Assassins</p>
                </div>
                <div class="col span-1-of-4 game-image">
                    <img class="" src="{{asset('img/ghost sniper 3.jpg')}}" alt="">
                    <p>Ghost Sniper</p>
                </div>
            </div>
        </div>
        
    </section>    

    <!-- Lien he-->
    <section id="contract-ID" class="contract-section">
        <div class="row">
            <div class="col span-1-of-3 contract">
                <h3>Thông tin liên hệ</h3>
                <ul class="list-contract">
                    <li><i class="fas fa-map-marker-alt small-icon"></i>Địa chỉ: Hoàn Kiếm - Hà Nội</li>
                    <li><i class="fas fa-envelope small-icon"></i>Email: blogquantrimaytinh@gmail.com</li>
                    <li><i class="fas fa-phone small-icon"></i>SĐT: 0789.354.886</li>
                </ul>
                <ul class="social-icons">
                    <li><i class="fab fa-facebook"></i></li>
                    <li><i class="fab fa-twitter-square"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-google-plus-square"></i></li>
                </ul>
            </div>
            <div class="col span-1-of-3">
                <h3>Liên kết hay</h3>
                <ul class="partner">
                    <li><a href="#">Quản trị máy tính 1</a></li>
                    <li><a href="#">Quản trị máy tính 2</a></li>
                    <li><a href="#">Quản trị máy tính 3</a></li>
                    <li><a href="#">Quản trị máy tính 4</a></li>
                    <li><a href="#">Quản trị máy tính 5</a></li>
                </ul>
            </div>
            <div class="col span-1-of-3 about">
                <h3>Giới thiệu</h3>
                <p>Đây là blog game của Nguyễn Dương</p>
            </div>
        </div>
    </section>

    <footer>
        <p>
            Copyright &copy; Blogger Nguyen Duong
        </p>
    </footer>

    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>

    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>