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

    <title>quantrimaytinh</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header id="home">
        <nav>
            <a href="{{url('/')}}"><img src="{{asset('img/logo1.png')}}" alt="logo" class="logo"></a>
            <ul class="main-nav"> 
                <!-- <li><a href="#home">Trang chủ</a></li>-->
                <li><a href="#about-ID" class="fs-5">Giới thiệu</a></li>
                <li><a href="#hotgame-ID" class="fs-5">Game nổi bật</a></li>
                <li><a href="{{url('/category')}}" class="fs-5">Thể loại</a></li>
                <li><a href="#quote-ID" class="fs-5">About</a></li>
                <li><a href="#football-ID" class="fs-5">Phần mềm</a></li>
                <li><a href="#contract-ID" class="fs-5">Liên hệ</a></li>
            </ul>
        </nav>

        
    </header>

    <!--Anh nen dau trang-->
    <div class="header-background"></div>

    @yield('content')

    <!-- Lien he-->
    <section id="contract-ID" class="contract-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 contract">
                    <h3 class="text-center">Thông tin liên hệ</h3>
                    <ul class="list-contract">
                        <li><i class="fas fa-map-marker-alt small-icon"></i>Địa chỉ: Hà Nội</li>
                        <li><i class="fas fa-envelope small-icon"></i>Email: blogquantrimaytinh@gmail.com</li>
                        <li><i class="fas fa-phone small-icon"></i>SĐT: 0123.456.789</li>
                    </ul>
                    <ul class="social-icons">
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-twitter-square"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fab fa-google-plus-square"></i></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">Liên kết hay</h3>
                    <ul class="partner px-0">
                        <li><a href="#">Quản trị máy tính 1</a></li>
                        <li><a href="#">Quản trị máy tính 2</a></li>
                        <li><a href="#">Quản trị máy tính 3</a></li>
                        <li><a href="#">Quản trị máy tính 4</a></li>
                        <li><a href="#">Quản trị máy tính 5</a></li>
                    </ul>
                </div>
                <div class="col-md-4 about">
                    <h3 class="text-center">Giới thiệu</h3>
                    <p>Đây là blog game của Nguyễn Dương</p>
                </div>
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